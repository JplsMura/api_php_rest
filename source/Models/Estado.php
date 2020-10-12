<?php

namespace Source\Models;

use Source\Database\Connect;

class Estado extends Connect {

    private $connection;
    private $table = "estado";

    public $id_estado;
    public $nome;
    public $pais;

    public function __construct(Connect  $connection) {
        $this->connection = $connection->getInstance();
    }

}