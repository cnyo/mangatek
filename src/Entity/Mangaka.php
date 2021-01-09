<?php

namespace App\Entity;

use App\Repository\MangakaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangakaRepository::class)
 */
class Mangaka
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\OneToMany(targetEntity=Manga::class, mappedBy="mangaka", orphanRemoval=true)
     */
    private $mangas;

    public function __construct()
    {
        $this->mangas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return Collection|Manga[]
     */
    public function getmangas(): Collection
    {
        return $this->mangas;
    }

    public function addManga(Manga $Manga): self
    {
        if (!$this->mangas->contains($Manga)) {
            $this->mangas[] = $Manga;
            $Manga->setMangaka($this);
        }

        return $this;
    }

    public function removeManga(Manga $Manga): self
    {
        if ($this->mangas->removeElement($Manga)) {
            // set the owning side to null (unless already changed)
            if ($Manga->getMangaka() === $this) {
                $Manga->setMangaka(null);
            }
        }

        return $this;
    }
}
