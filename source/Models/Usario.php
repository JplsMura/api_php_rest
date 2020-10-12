<?php

namespace Source\Models;

use Source\Database\Connect;

class Usuario extends Connect {

    private $connection;

    private $table = "usuario";

    public $id_usuario;
    public $nome;
    public $codendereco;
    public $codcidade;
    public $codestado;

    public function __construct(Connect $connection) {
        $this->connection = $connection->getInstance();
    }

    public function userAll()
    {
        try
        {
            $userAll = $this->connection->prepare("SELECT * FROM usuario");

            return $userAll->execute();

        }catch (\Exception $e){
            return false;
        }
    }

}