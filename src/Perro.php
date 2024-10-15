<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Perro
{

    #[ORM\Id, ORM\Column(type:'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    protected string $nombre;

    #[ORM\Column(type: 'integer')]
    protected int $edad;

    #[ORM\ManyToOne(targetEntity: "Cliente", inversedBy: "perros")]
    #[ORM\JoinColumn(name: "cliente_dni", referencedColumnName: "dni", nullable: false)]
    protected Cliente $cliente;

    // cuando se hace el persist se guarda en el perro porque es la entidad que tiene el foreing key

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }
}