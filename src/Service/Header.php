<?php


namespace Src\Service;


class Header
{
    public function init()
    {
        header('Content-Type: application/json');
        $this->route->load();
        return $this;
    }
}