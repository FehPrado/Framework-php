<?php 

//crinado conexão
$HOST = 'localhost';
$USER = 'root';
$PASS = '123456789';

$conect = new mysqli($HOST, $USER, $PASS);

//Definindo informações do banco

//Nome do banco
$dbname = 'itinerary';
//Nome da tabela
$tbone = 'products';
$tbtwo = 'itinerarys';
$tbthree = 'users';
$tbfour = 'users_itineraryes';
