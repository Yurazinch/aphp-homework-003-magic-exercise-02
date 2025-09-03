<?php

declare(strict_types=1);

trait MobileUserAuthentication
{
    public function authenticate(): string 
    {        
        if($this->log === 'ivan' && $this->pass === 'passmob')
        {
            return 'Пользователь авторизовался в мобильном приложении';
        }
        else
        {
            return 'Ошибка';
        }        
    }
}