<?php

class Dragon extends Pokemon
{
    protected $vida;
    protected $vida_actual;
    protected $vida_ataque;
    protected $elemento;
    public function __construct ($nombre, $tipo, $ataque, $elemento){
        parent::__construct($nombre, $tipo, $ataque);
        $this->vida = rand(100, 200);
        $this->vida_actual = $this->vida;
        $this->vida_ataque= rand(50, 100);
        $this->elemento = $elemento;
    }

    public function Atacar($pokemon) : string{
        $pokemon->vida -= $this->vida_ataque*1.5;
        return $this->getNombre(). " ha atacado a ". $pokemon->getNombre(). " haciendo ". $this->vida_ataque. " de daño";
    }

}