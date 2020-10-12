<?php

namespace Controller\User;

use Source\Models\Usuario;

class UserController
{
    private $userModal = null;

    public function __construct(Usuario $usuario) {

        $this->userModal = $usuario;

    }

    public function index(){
        try
        {
            return 'ola user';

           return  json_encode($this->userModal->userAll());

        }
        catch(\Exception $e){
            return false;
        }
    }
}