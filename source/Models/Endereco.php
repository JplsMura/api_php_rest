<?php

namespace Source\Models;

use Source\Database\Connect;

class Endereco extends Connect {

    private $connection;
    private $table = "endereco";

    public $id_endereco;
    public $rua;
    public $numero;

    public function __construct(Connect $connection) {
        $this->connection = $connection->getInstance();
    }

}