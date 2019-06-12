<?php

namespace pattern;

class DatabaseConfig
{
    private $host;
    private  $name;
    private  $password;
    private  $table_name;

    public function __construct(string $host, string $name, string $password, string $table_name)
    {
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->table_name = $table_name;
    }

    public function host(): string
    {
        return $this->host;
    }

    public function name(): string 
    {
        return $this->name;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function table_name(): string 
    {
        return $this->table_name;
    }
}