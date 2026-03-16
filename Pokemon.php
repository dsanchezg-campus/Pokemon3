<?php
class Pokemon {
    protected $nombre;
    protected $tipo;
    protected $ataque;
    protected $nivel;
    protected $vida;
    protected $vida_actual;
    protected $vida_ataque;
    protected $elemento;


    public function __construct($nombre, $tipo, $ataque){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->nivel = 1;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDanio(){
        return $this->vida_ataque;
    }


    public function Evolucionar(){
        $this->vida = (($this->vida+ rand(0,31)) * 2 + rand(0,252)/4)/100 + $this->nivel + 10;
        return $this->vida;
    }

    public function getVida(){
        return $this->vida;
    }
    public function getVida_actual(){
        return $this->vida_actual;
    }

    public function MostrarInfo(){
        return
            "<p>Nombre: " . $this->nombre . "</p>" .
            "<p>Tipo: " . $this->tipo . "</p>" .
            "<p>Elemento: " . $this->elemento . "</p>" .
            "<p>Ataque: " . $this->ataque . "</p>" .
            "<p>Nivel: " . $this->nivel . "</p>";
    }

}
?>