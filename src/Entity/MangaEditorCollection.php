<?php

namespace App\Entity;

use App\Repository\MangaEditorCollectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangaEditorCollectionRepository::class)
 */
class MangaEditorCollection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Manga::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $manga;

    /**
     * @ORM\OneToOne(targetEntity=Editor::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $editor;

    /**
     * @ORM\OneToOne(targetEntity=Collection::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $collection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEditor(): ?Editor
    {
        return $this->Editor;
    }

    public function setEditor(Editor $Editor): self
    {
        $this->Editor = $Editor;

        return $this;
    }

    public function getManga(): ?Manga
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    public function getCollection(): ?Collection
    {
        return $this->collection;
    }

    public function setCollection(?Collection $collection): self
    {
        $this->collection = $collection;

        return $this;
    }
}
