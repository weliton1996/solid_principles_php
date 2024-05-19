<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

    public function testEstouFuncionando() {

        //apenas um test do teste
        $valor = 10;
        $this->assertEquals($valor, 10);
    }

    public function testEstadoInicialItem() {

        $item = new Item();

        // $item->getDescricao() == '';
        // $item->getValor() == 0;

        //Como verificar os estados iniciais de Item?
        //usando as asserções do PHPUnit = é um tipo de verificação.

        //$this->assertEquals(<esperado>, <atual>);
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testItemValido() {

        $item = new Item();
        $item->setValor(55);
        $item->setDescricao('teste da descrição');
        
        //submeter um item válido para teste e retornar ok
        $this->assertEquals(true, $item->itemValido());

        //submeter um item válido para teste e retornar false(descricao)
        $item->setValor(10);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        //submeter um item válido para teste e retornar false(valor)
        $item->setValor(0);
        $item->setDescricao('teste da descrição');
        $this->assertEquals(false, $item->itemValido());

        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }


    public function testGeteSetDescricao() {
        $descricao =  'teste da descrição';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());

    }

    // public function testGeteSetValor() {
    //     $valor =  10;

    //     $item = new Item();
    //     $item->setValor($valor);
    //     $this->assertEquals($valor, $item->getValor());

    // }
    

    ############################__METODOS PROVEDOR DE DADOS__############################

    /**
    * @dataProvider dataValores
    */
    public function testGeteSetValor($valor) {
        
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());

    }


    public function dataValores() {
        return [
            [100],
            [-10],
            [0],
            [111],
            [22],
            ['sads'],
        ];
    }
    
}