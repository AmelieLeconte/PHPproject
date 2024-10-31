<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Bank;  
use App\Entity\Coin;
use App\Entity\Member;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function load(ObjectManager $manager): void
    {
        $mybank = new Bank();
        $mybank->setName("Gringotts");
        $manager->persist($mybank);

        foreach ($this->getNames() as $name) {
            $coin = new Coin();
            $coin->setValue($name);
            $coin->setbank($mybank);
            $manager->persist($coin);
        
        }
        foreach ($this->membersGenerator() as [$email, $plainPassword]) {
            $user = new Member();
            $password = $this->hasher->hashPassword($user, $plainPassword);
            $user->setEmail($email);
            $user->setPassword($password);

            // $roles = array();
            // $roles[] = $role;
            // $user->setRoles($roles);

            $manager->persist($user);

        $manager->flush();
    }}

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
     *  [email, plain text password]
     * @return \\Generator
     */
    private function membersGenerator(): \Generator
    {
        yield ['olivier@localhost', '123456'];
        yield ['slash@localhost', '123456'];
    }

    
}
