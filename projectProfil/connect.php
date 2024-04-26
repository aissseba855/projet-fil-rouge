<?php
const DBHOST = 'db';
const DBUSER = 'test';
const DBPASS = 'pass';
const DBNAME = 'demo';

$dsn = 'mysql:host='. DBHOST .';dbname='. DBNAME  ;

try{
  $db = new PDO($dsn,DBUSER,DBPASS);
  //echo 'connecté';
}catch(PDOException $exception){
    echo 'une erreur est survenus :' . $exception->getMessage();
}
?>