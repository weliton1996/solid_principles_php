<?php

    require __DIR__.'/vendor/autoload.php';
    // echo 'Funcionando!';

    use src\Poligono;
    use src\poligonos\Retangulo;
    use src\poligonos\Quadrado;

    $poligono = new Poligono();
    $poligono->setForma(new Retangulo());
    $poligono->getForma()->setAltura(5);
    $poligono->getForma()->setLargura(10);
    echo '<pre>';
    print_r($poligono);
    echo '</pre>';
    echo '<h3>Área do retângulo: '. $poligono->getArea() .'</h3>';

    $poligono = new Poligono();
    $poligono->setForma(new Quadrado());
    $poligono->getForma()->setLado(5);
    echo '<pre>';
    print_r($poligono);
    echo '</pre>';
    echo '<h3>Área do quadrado: '. $poligono->getArea() .'</h3>';
    
    /*
    $retangulo = new Retangulo();

    $retangulo->setAltura(5);
    $retangulo->setLargura(10);

    echo '<h3>Área do retângulo: '. $retangulo->getArea() .'</h3>';

    $quadrado = new Quadrado();

    $quadrado->setAltura(5);
    // $quadrado->setLargura(10);

    echo '<h3>Área do quadrado: '. $quadrado->getArea() .'</h3>';
    */