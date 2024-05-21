<?php


namespace src;

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
    
    public function lerArquivoCSV(string $caminho): void
    {
        // echo $caminho;

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 1000, ';'))){

            // print_r($linha[0]. ' ==> ');
            // print_r($linha[1]. ' ==> ');
            // print_r($linha[2]. '  ');
            // echo '<br>';

            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        // echo '<pre>';
        // print_r($this->dados);
        // echo '</pre>';
        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho): void
    {
        $handle = fopen($caminho, 'r');

        while(!feof($handle)){
            $linha = fgets($handle);
            // echo substr($linha,0,11);
            $this->setDados(
                substr($linha,11,30),
                substr($linha,0,11),
                substr($linha,41,50)
            );
        }
        fclose($handle);
    }
}