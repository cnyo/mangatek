<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangaRepository::class)
 */
class Manga
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $tome;

    /**
     * @ORM\Column(type="integer")
     */
    private $isbn;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cover;

    /**
     * @ORM\ManyToOne(targetEntity=Mangaka::class, inversedBy="manga")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mangaka;

    /**
     * @ORM\ManyToOne(targetEntity=Mangaka::class, inversedBy="manga")
     * @ORM\JoinColumn(nullable=false)
     */
    private $scriptwriter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getTome(): ?int
    {
        return $this->tome;
    }

    public function setTome(?int $tome): self
    {
        $this->tome = $tome;

        return $this;
    }

    public function getIsbn(): ?int
    {
        return $this->isbn;
    }

    public function setIsbn(int $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getMangaka(): ?Mangaka
    {
        return $this->mangaka;
    }

    public function setMangaka(?Mangaka $mangaka): self
    {
        $this->mangaka = $mangaka;

        return $this;
    }

    public function getScriptwriter(): ?Mangaka
    {
        return $this->scriptwriter;
    }

    public function setScriptwriter(?Mangaka $scriptwriter): self
    {
        $this->scriptwriter = $scriptwriter;

        return $this;
    }
}
