<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $koala;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKoala(): ?string
    {
        return $this->koala;
    }

    public function setKoala(string $koala): self
    {
        $this->koala = $koala;

        return $this;
    }
}
