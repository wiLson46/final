<?php

class Cliente
{

    public int $dni;
    public string $nombre;
    public Array $perros;

    public function __construct($dni, $nombre, $perros)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->perros = $perros;
    }

    public function chequearPerros() {
        // return lista de perros ;
    }

}