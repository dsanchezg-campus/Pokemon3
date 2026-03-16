<?php
class Pokemon {
    private $nombre;
    private $tipo;
    private $ataque;
    private $nivel;


    public function __construct($nombre, $tipo, $ataque){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->nivel = rand(1,100);
        $this->vida = rand(1,255);
        $this->vida_actual = $this->vida;
        $this->vida_ataque=rand(1,255);
    }

    public function restaVida($danio){
        $this->vida=$this->vida - $danio;
        return $this->vida;
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

    public function MostrarInfo(){
    return 
        "<p>Nombre: " . $this->nombre . "</p>" .
        "<p>Elemento: " . $this->elemento . "</p>" .
        "<p>Tipo: " . $this->tipo . "</p>" .
        "<p>Ataque: " . $this->ataque . "</p>" .
        "<p>Nivel: " . $this->nivel . "</p>" .
        "<p>Vida: " . $this->vida . "</p>";
    }

}
?>