<?php

namespace App\Models;

class Listing {

    protected int $id;
    protected string $label = '';
    protected string $description = '';

    public static function getAll():array {
        $res = [
            (new self())
            ->setId(random_int(1,100))
            ->setLabel(bin2hex(random_bytes(10)))
            ->setDescription(bin2hex(random_bytes(30))),
            (new self())
            ->setId(random_int(1,100))
            ->setLabel(bin2hex(random_bytes(10)))
            ->setDescription(bin2hex(random_bytes(30)))
        ];

        return $res;
    }

    public function setId(int $id){
        $this->id = $id;
        return $this;
    }

    public function setLabel(string $label){
        $this->label = $label;
        return $this;
    }
    public function setDescription(string $description){
        $this->id = $description;
        return $this;
    }

    public function getId():int {
       return $this->id;
    }

    public function getLabel():string {
        return $this->label;    
    }

    public function getDescription():string {
        return$this->description;
    }

}