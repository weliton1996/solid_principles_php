<?php

namespace src\dao;

use src\BD;
use src\interfaces\Icadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements Icadastro, ILog, INotificacao
{
    public function salvar()
    {
        //logica
    }
    public function registrar(Log $log)
    {
        //logica
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        //logica
    }
}
