<?php
require dirname(__DIR__) . "/App/Database.php";

$db = new Database("floralexdb");

$db->showDb();


