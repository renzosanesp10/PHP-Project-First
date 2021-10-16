<?php

class Helpers {

    public function __construct(public $row)
    {
        
    }

    public function getUsuario()
    {
        echo "Hola ".$this->row;
    }
}

?>