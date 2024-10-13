<?php

class Login

{
    public string $usuario;
    public string $password;

    public function __construct($usuario, $password)
    {
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function validarLogin($usuario, $password)
    {
        if ($this->usuario == "admin" && $this->password == "admin") {

            return header("Location: admin.html");
            exit();

        } else if ($this->usuario == "user" && $this->password == "user") {

            return header("Location: user.html");
            exit();

        } else {

            exit();

        }
    }
}
