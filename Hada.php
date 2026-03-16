<?php

class Hada extends Pokemon
{
    public function __construct ($nombre, $tipo, $ataque){
        $this->nombre = $nombre;
        $this->elemento = "hada";
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->nivel = 1;
        $this->vida = rand(80, 150);
        $this->vida_actual = $this->vida;
        $this->vida_ataque= rand(75, 125);
    }

    public function Atacar($pokemon) : string {
        $pokemon->vida -= $this->vida_ataque;
        $this->vida_actual += $this->vida_ataque*0.5;
        return $this->getNombre(). " ha atacado a ". $pokemon->getNombre(). " haciendo ". $this->vida_ataque. " de daño y se ha curado ". $this->vida_ataque*0.5 ;
    }

}