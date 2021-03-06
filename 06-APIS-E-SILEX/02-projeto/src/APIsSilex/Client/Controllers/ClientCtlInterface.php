<?php

namespace APIsSilex\Client\Controllers;

use Silex\Application;

interface ClientCtlInterface
{
    public function connect(Application $app) ;
    
    public function getClient(Application $app);
    
    public function getClientId(Application $app, $code);
}
