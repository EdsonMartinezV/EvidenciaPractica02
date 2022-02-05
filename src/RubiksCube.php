<?php

namespace EdsonMtz\PooEvidence;

class RubiksCube extends Toy{

    public function __construct(protected string $name, protected int $price, protected string $category, protected int $layers, protected string $theme){
        parent::__construct($name, $price, $category);
    }

    public function describe():string{
        return parent::describe()."<br>This toy is also a rubik's cube with $this->layers layers and a $this->theme theme";
    }

    public function solve(int $nAttemp = null){
        if ($nAttemp == null) {
            echo "This toy is being solved";
        }else {
            echo "This toy is being solved by the ".$nAttemp."nd time";
        }
    }

    public function getLayers():int{
        return $this->layers;
    }

    public function getTheme():string{
        return $this->theme;
    }
}