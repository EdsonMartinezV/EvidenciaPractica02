<?php

namespace EdsonMtz\PooEvidence;

class Toy{

    public function __construct(protected string $name,
                                protected int $price,
                                protected string $category){}

    public function play(){
        echo "This toy is being played";
    }

    public function describe():string{
        return "This toy is a(n) $this->name, it is $$this->price and its category is $this->category";
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
