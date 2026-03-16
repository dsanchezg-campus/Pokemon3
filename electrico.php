<?php

class electrico extends Pokemon
{
    public function __construct ($nombre, $tipo, $ataque){
        parent::__construct($nombre, $tipo, $ataque);

        $this->nombre = $nombre;
        $this->elemento = "electrico";
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->nivel = 1;
        $this->vida = rand(70,130);
        $this->vida_actual = $this->vida;
        $this->vida_ataque= rand(40, 120);
    }

    public function Atacar($pokemon) : string{
        $pokemon->vida -= $this->vida_ataque*2;
        $pokemon->vida_actual -= $this->vida_ataque*0.5;
        

        return $this->getNombre(). " ha atacado a ". $pokemon->getNombre(). " haciendo ". $this->vida_ataque. " de daño";
    }

}