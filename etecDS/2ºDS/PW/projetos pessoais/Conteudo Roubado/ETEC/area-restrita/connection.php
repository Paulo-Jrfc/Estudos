<?php

function getConnection(){
  $dbname = '4113722_lojinhadejogo';
    $hostname ='fdb33.awardspace.net';
    $username = '4113722_lojinhadejogo';
    $password = "2]raOwTZ6#fYNAD6";
    
    $connection = new PDO("mysql:dbname=4113722_lojinhadejogo;host=fdb33.awardspace.net","4113722_lojinhadejogo","2]raOwTZ6#fYNAD6");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $connection;
    
}
