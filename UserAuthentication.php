<?php

declare(strict_types=1);

require_once('AppUserAuthentication.php');
require_once('MobileUserAuthentication.php');

class UserAuthentication
{
    private $log;
    private $pass;

    use AppUserAuthentication;
    use MobileUserAuthentication
    {
        MobileUserAuthentication::authenticate insteadOf AppUserAuthentication;
        AppUserAuthentication::authenticate as authenticApp;
    }

    public function __construct(string $log, mixed $pass)
    {
        $this->log = $log;
        $this->pass = $pass;
    }

    public function setLogin($a, $b) {
        if(!isset($a) || !isset($b))
        {
            throw new \Exception("---\n Нет данных для проверки \n---\n");               
        }
        $this->log = $a;
        $this->pass = $b;            
    }
}