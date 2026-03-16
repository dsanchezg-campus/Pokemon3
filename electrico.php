<?php

class electrico extends Pokemon
{
    public function __construct ($nombre, $tipo, $ataque){
        $this->nombre = $nombre;
        $this->elemento = "dragon";
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->nivel = 1;
        $this->vida = rand(100, 200);
        $this->vida_actual = $this->vida;
        $this->vida_ataque= rand(50, 100);
    }

    public function Atacar($pokemon) : string{
        $pokemon->vida -= $this->vida_ataque*2;
        return $this->getNombre(). " ha atacado a ". $pokemon->getNombre(). " haciendo ". $this->vida_ataque. " de daño";
    }

}