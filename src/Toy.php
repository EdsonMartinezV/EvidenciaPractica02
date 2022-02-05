<?php

namespace EdsonMtz\PooEvidence;

class Toy{

    public function __construct(private string $name,
                                private int $price,
                                private string $category){}

    public function play(){
        echo "This toy is being played";
    }

    public function getName():string{
        return $this->name;
    }

    public function getPrice():int{
        return $this->price;
    }

    public function getCategory():string{
        return $this->category;
    }
}
