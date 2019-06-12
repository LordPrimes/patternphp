<?php 

namespace pattern;
include('../pattern/DatabaseConfig.php');

use pattern\DatabaseConfig;

class DatabaseConnection 
{
    
 
    private $configuration;

 
    public function __construct(DatabaseConfig $config)
    {
        $this->configuration = $config;
    }
}

