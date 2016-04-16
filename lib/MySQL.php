<?php

class MySQL extends PDO 
{
    public function __construct(Config $config)
    {
        parent::__construct("mysql:host=$config->hostname;dbname=$config->database", $config->username, $config->password);
    }
}
