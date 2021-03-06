<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgrammeRepository::class)
 */
class Programme
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_heures;

    /**
     * @ORM\ManyToOne(targetEntity=Module::class, inversedBy="programmes")
     */
    private $module;

    /**
     * @ORM\ManyToOne(targetEntity=Formation::class, inversedBy="programmes")
     */
    private $formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbHeures(): ?int
    {
        return $this->nb_heures;
    }

    public function setNbHeures(int $nb_heures): self
    {
        $this->nb_heures = $nb_heures;

        return $this;
    }

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
}
