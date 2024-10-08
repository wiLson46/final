<?php

class Perro
{

    public string $nombre;
    public int $edad;
    public int $clienteDni;

    public function __construct($nombre, $edad, $clienteDni)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->clienteDni = $clienteDni;
    }
    
}