<?php

class Account {

    private $id;
    private $type;
    private $balance;

    public function __construct($id, $type, $balance){
        $this->id = $id;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function __set($atrib, $value){
        $this->$atrib = $value;
    }

    public function __get($atrib){
        return $this->$atrib;
    }
}