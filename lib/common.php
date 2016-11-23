<?php
//session_start();

$user = 'User21';
$pass = '123';
$dsn = 'mysql:host=localhost;dbname=BAKING';

$gPDO = new PDO($dsn, $user, $pass);
