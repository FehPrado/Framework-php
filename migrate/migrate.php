<?php

$HOST = 'localhost';
$USER = 'root';
$PASS = '123456789';

//crinado conexão
$conect = new mysqli($HOST, $USER, $PASS);


//criando

$sql = "CREATE DATABASE julio";
if ($conect->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conect->error;
}


$











$conect->close();