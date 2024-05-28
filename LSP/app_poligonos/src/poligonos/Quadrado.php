<?php

namespace src\poligonos;

class Quadrado {

    protected $largura;
    protected $altura;

    public function setLado(float $area): void {
        $this->largura = $area;
        $this->altura = $area;

    }

    public function getLargura(): float {
        return $this->largura;
    }

    public function getAltura(): float {
        return $this->altura;
    }
}