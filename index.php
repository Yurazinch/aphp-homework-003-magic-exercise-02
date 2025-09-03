<?php

declare(strict_types=1);

require_once('UserAuthentication.php');

$autentication = new UserAuthentication('', '');

$a = 'ivan';
$b = 'passapp';

//$a = 'ivan';
//$b = 'passmob';

//$a = 'petr';
//$b = 'passapp';

try
{
    $autentication->setLogin($a, $b);

    $app = $autentication->authenticApp();
    $mob = $autentication->authenticate();


    if($app !== 'Ошибка' && $mob === 'Ошибка')
    {
        echo "---\n $app \n---\n";
    }
    elseif($app === 'Ошибка' && $mob !== 'Ошибка')
    {
        echo "---\n $mob \n---\n";
    }
    else
    {
        echo "---\n Не выполнен вход ни на одном устройстве \n---\n";
    }
}
catch (\Exception $e)
{
    echo ($e->getMessage());
}