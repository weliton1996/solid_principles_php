<?php

use PHPUnit\Framework\TestCase;
use src\Leitor;

class LeitorTest extends TestCase {

    // public function testEstouFuncionando() {

    //     //apenas um test do teste
    //     $valor = 10;
    //     $this->assertEquals($valor, 10);
    // }

    /**
    * @dataProvider dataValores
    */
    public function testGetDiretorioeSetDiretorio($valor) {

        //apenas um test do teste
        // $valor = 'sou um diretório';
        $diretorio = new Leitor();
        $diretorio->setDiretorio($valor);

        //isset($valor) == true
        $this->assertEquals($valor, $diretorio->getDiretorio());

        //(string && !== '') == true
        $this->assertEquals(true, $diretorio->setDiretorio($valor));
    }

    /**
    * @dataProvider dataValores
    */
    public function testGetArquivoeSetArquivo($valor) {

        //apenas um test do teste
        // $valor = 'sou um diretório';
        $arquivo = new Leitor();
        $arquivo->setArquivo($valor);

        //isset($valor) == true
        $this->assertEquals($valor, $arquivo->getArquivo());

        //(string && !== '') == true
        $this->assertEquals(true, $arquivo->setArquivo($valor));
    }

    public function dataValores() {
        //Falhas esperadas
        // return [
        //     ['sou o teste 1'],
        //     ['teste 2'],
        //     0,
        //     [22.10],
        //     [["teste"]],
        //     [''],
        //     "teste" => 1212    
        // ];
        
        //Sucessos esperados
        return [
            ['sou o teste 1'],
            ['teste 2'],
        ];
    }
}