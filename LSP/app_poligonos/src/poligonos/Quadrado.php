<?php

namespace src\poligonos;

class Quadrado {

    protected $largura;
    protected $altura;

    public function setLargura(float $largura): void {
        $this->altura = $largura;
        $this->largura = $largura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    // public function setLado(float $area): void {
    //     $this->largura = $area;
    //     $this->altura = $area;

    // }

    public function getLargura(): float {
        return $this->largura;
    }

    public function getAltura(): float {
        return $this->altura;
    }
}