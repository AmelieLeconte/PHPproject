<?php

namespace App\Entity;

use App\Repository\CheminDeTraverseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CheminDeTraverseRepository::class)]
class CheminDeTraverse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    /**
     * @var Collection<int, Member>
     */
    #[ORM\ManyToMany(targetEntity: Member::class)]
    private Collection $createur;

    /**
     * @var Collection<int, Coin>
     */
    #[ORM\ManyToMany(targetEntity: Coin::class)]
    private Collection $coin;

    public function __construct()
    {
        $this->createur = new ArrayCollection();
        $this->coin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return Collection<int, Member>
     */
    public function getCreateur(): Collection
    {
        return $this->createur;
    }

    public function addCreateur(Member $createur): static
    {
        if (!$this->createur->contains($createur)) {
            $this->createur->add($createur);
        }

        return $this;
    }

    public function removeCreateur(Member $createur): static
    {
        $this->createur->removeElement($createur);

        return $this;
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
        }

        return $this;
    }

    public function removeCoin(Coin $coin): static
    {
        $this->coin->removeElement($coin);

        return $this;
    }
}
