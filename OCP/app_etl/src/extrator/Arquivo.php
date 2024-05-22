<?php


namespace src\extrator;

class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void 
    {
        array_push(
            $this->dados,
            [
                //'nome' => iconv(<'encode atual'>,<'encode esperado'>,$nome), 
                'nome' => iconv('iso-8859-1','utf-8',$nome), 
                'cpf' => $cpf, 
                'email' => $email
            ]
        );
    }

    public function getDados(): array 
    {
        return $this->dados;
    }
}