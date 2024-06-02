<?php

namespace src\interfaces;

use src\componentes\Log;

//Segregando as interfaces
interface ILog
{
    public function registrar(Log $log);
}