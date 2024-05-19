<?php

namespace src;

use src\Arquivo;

class Leitor
{

    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio): bool
    {
        $this->diretorio = $diretorio;
        return $diretorio !== '';
    }

    public function setArquivo(string $arquivo): bool
    {
        $this->arquivo = $arquivo;
        return $arquivo !== '';
    }

    public function lerArquivo(): array
    {
        // echo 'teste';
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        // echo $caminho;

        $arquivo = new Arquivo();
        $arquivo->lerArquivoCSV($caminho);

        return $arquivo->getDados();
    }
}
