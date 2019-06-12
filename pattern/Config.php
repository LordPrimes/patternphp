<?php 

namespace pattern;

use pattern\DatabaseConfig;

include('../pattern/DatabaseConfig.php');
use pattern\DatabaseConnection;
include('../pattern/DatabaseConnection.php');

class Config 
{
    public function config()
    {
        $config = new DatabaseConfig('localhost','root',  1234, 'laravel');
        $connection = new DatabaseConnection($config);
    }
}
