<?php

namespace App\Entity;

use App\Repository\BankRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BankRepository::class)]
class Bank
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Coin>
     */
    #[ORM\OneToMany(targetEntity: Coin::class, mappedBy: 'bank')]
    private Collection $coin;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Member $member = null;

    public function __construct()
    {
        $this->coin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Coin>
     */
    public function getCoin(): Collection
    {
        return $this->coin;
    }

    public function addCoin(Coin $coin): static
    {
        if (!$this->coin->contains($coin)) {
            $this->coin->add($coin);
            $coin->setBank($this);
        }

        return $this;
    }

    public function removeCoin(Coin $coin): static
    {
        if ($this->coin->removeElement($coin)) {
            // set the owning side to null (unless already changed)
            if ($coin->getBank() === $this) {
                $coin->setBank(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): static
    {
        $this->member = $member;

        return $this;
    }
}
