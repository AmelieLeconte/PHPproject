<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Bank;  
use App\Entity\Coin;
use App\Entity\Member;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\CheminDeTraverse; 


class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
    private const OLIVIER_MEMBER = 'olivier-member';
    private const SLASH_MEMBER = 'slash-member';


    public function load(ObjectManager $manager): void
    {
        // Create and persist a bank
        $mybank = new Bank();
        $mybank->setName("Gringotts");
        $manager->persist($mybank);

        // Create and persist coins associated with the bank
        foreach ($this->getNames() as $name) {
            $coin = new Coin();
            $coin->setValue($name);
            $coin->setBank($mybank);
            $manager->persist($coin);

            // Add a reference for each coin for later use in CheminDeTraverse
            $this->addReference($name, $coin);
        }

        // Create and persist members
        foreach ($this->membersGenerator() as [$email, $plainPassword, $memberRef]) {
            $user = new Member();
            $password = $this->hasher->hashPassword($user, $plainPassword);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setRoles(['ROLE_USER']);

            $manager->persist($user);

            // Set a reference for each member to use it in CheminDeTraverse
            $this->addReference($memberRef, $user);
        }

        // Create CheminDeTraverse entries and associate them with members and coins
        foreach ($this->cheminDeTraverseGenerator() as [$numero, $memberRef, $coinsRefs]) {
            $cheminDeTraverse = new CheminDeTraverse();
            $cheminDeTraverse->setNumero($numero);

            // Retrieve the member and set it for CheminDeTraverse
            $member = $this->getReference($memberRef);
            $cheminDeTraverse->setMember($member);

            // Associate each referenced coin with the CheminDeTraverse
            foreach ($coinsRefs as $coinRef) {
                $coin = $this->getReference($coinRef);
                $cheminDeTraverse->addCoin($coin);
            }

            $manager->persist($cheminDeTraverse);
        }

        // Flush all persisted data to the database
        $manager->flush();
    }

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    private function getNames(): \Generator
    {
        yield 'coin de Paul';
        yield 'coin de Thomas';
        yield 'coin de Augustin';
        yield 'coin de Agathe';
    }

    /**
     * Generates initialization data for members :
     *  [email, plain text password, reference name]
     * @return \Generator
     */
    private function membersGenerator(): \Generator
    {
        yield ['olivier@localhost', '123456', self::OLIVIER_MEMBER];
        yield ['slash@localhost', '123456', self::SLASH_MEMBER];
    }

    /**
     * Generates data for CheminDeTraverse entities
     * [numero, member reference, array of coin references]
     * @return \Generator
     */
    private function cheminDeTraverseGenerator(): \Generator
    {
        yield [1, self::OLIVIER_MEMBER, ['coin de Paul', 'coin de Thomas']];
        yield [2, self::SLASH_MEMBER, ['coin de Augustin', 'coin de Agathe']];
    }
}
