<?php

namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{

    private const HOST = "localhost";
    private const USER = "root";
    private const DBNAME = "api";
    private const PASSWD = "Poolday@13";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Força que o PDO trabalhe em utf8
        PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION, // Todos os erros sejem em execption por padrão
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // Que todas a consulta retorno um obj para trabalharmos em POO
        PDO::ATTR_CASE => PDO::CASE_NATURAL  // Pega o case das colunas do banco, ex: Todos as colunas lower_case(minuscula)
    ];

    private static $instance;

    public function getInstance(): PDO
    {
        if(empty(self::$instance)) {
            try {

                self::$instance = new PDO(

                    "mysql:host=". self::HOST .";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS

                );

            }catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>" . $exception->getMessage());
            }
        }

        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }
}

?>