<?php

namespace Source\Models;

use Source\Database\Connect;

class Cidade extends Connect {

    private $connection;
    private $table = "cidade";

    public $id_cidade;
    public $nome;
    public $cep;

    public function __construct(Connect $connection) {
        $this->connection = $connection->getInstance();
    }

}