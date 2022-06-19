<?php

class Database{

    private $dbname;

    public function __construct($dbname)
    {
        $this->dbname = $dbname;
    }

    public function showDb()
    {

        var_dump($this->dbname);
        
    }

}




