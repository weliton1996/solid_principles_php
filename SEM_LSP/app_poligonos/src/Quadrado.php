<?php

namespace src;

class Quadrado extends Retangulo {

    //Polimorfismo - quando uma classe filha herda e modifica os métodos do pai.
    //Assim aqui ferimos a tipagem forte de comportamento
    public function setLargura(float $largura): void {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
        $this->largura = $altura;
    }
}