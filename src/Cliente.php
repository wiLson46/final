<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Cliente
{
    #[ORM\Column(type: 'string')]
    protected string $nombre;

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    protected int $dni;

    #[ORM\OneToMany(targetEntity: "Perro", mappedBy: "Cliente", cascade: ["persist", "remove"])]
    protected Collection $perros;

    public function __construct($dni, $nombre)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->perros = new ArrayCollection();
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    
    public function getPerros(): Collection
    {
        return $this->perros;
    }

    public function addPerro(Perro $perro): void
    {
        if (!$this->perros->contains($perro)) {
            $this->perros->add($perro);
            $perro->setCliente($this);
        }
    }
}
