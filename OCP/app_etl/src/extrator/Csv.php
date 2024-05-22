<?php

namespace src\extrator;

class Csv extends Arquivo{

    public function lerArquivo(string $caminho): array
    {
        // echo $caminho;

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 1000, ';'))){

            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
        fclose($handle);

        return $this->getDados();
    }
}