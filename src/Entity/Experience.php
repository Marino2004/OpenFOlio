<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ExperienceRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['read'])]
    private ?int $year = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read'])]
    private ?string $position = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read'])]
    private ?string $company = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read'])]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'experience')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Portfolio $portfolio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPortfolio(): ?Portfolio
    {
        return $this->portfolio;
    }

    public function setPortfolio(?Portfolio $portfolio): static
    {
        $this->portfolio = $portfolio;

        return $this;
    }
}
