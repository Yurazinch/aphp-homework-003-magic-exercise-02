<?php

declare(strict_types=1);

trait AppUserAuthentication
{
    public function authenticate(): string 
    {        
        if($this->log === 'ivan' && $this->pass === 'passapp')
        {
            return 'Пользователь авторизовался в приложении';
        }
        else
        {
            return 'Ошибка';
        }

    }
}