<?php

class Electrico extends Pokemon
{
    public function __construct ($nombre, $tipo, $ataque){
        parent::__construct($nombre, $tipo, $ataque);
        $this->elemento = "electrico";
        $this->vida = rand(70,160);
        $this->vida_actual = $this->vida;
        $this->vida_ataque= rand(100, 170);
    }

    public function Atacar($pokemon) : string {
        $pokemon->vida_actual -= $this->vida_ataque*0.6;
        return $this->getNombre(). " ha atacado a ". $pokemon->getNombre(). " haciendo ". $this->vida_ataque. " de daño";
    }

}