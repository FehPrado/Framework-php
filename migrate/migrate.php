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
$tbtwo = 'itinerary';


//Drop Banco
$sqldrop = "DROP DATABASE if exists $dbname ";
if ($conect->query($sqldrop) === TRUE) {
    echo "Banco $dbname deletado com sucesso";
} else {
    echo "Falha ao deletar banco: " . $conect->error;
}

// criando banco
echo "<\n>";
echo "CRIANDO BANCO DE DADOS";
echo "<\n>";

$sql = "CREATE DATABASE $dbname";
if ($conect->query($sql) === TRUE) {
    echo "Banco $dbname criado com sucesso";
} else {
    echo "Falha ao criar banco: " . $conect->error;
}

// criando tabela
echo "<\n>";
echo "CRIANDO TABELAS";
echo "<\n>";

$sqltb = "CREATE TABLE `$dbname`.`$tbone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARcHAR(145) NULL, 
  PRIMARY KEY (`id`));";
if ($conect->query($sqltb) === TRUE) {
    echo "$tbone criada com sucesso";
} else {
    echo "Falha ao criar $tbone: " . $conect->error;
}

echo "<\n>";

$sqltb = "CREATE TABLE `$dbname`.`$tbtwo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(100) NULL,
  PRIMARY KEY (`id`));";
if ($conect->query($sqltb) === TRUE) {
    echo "$tbtwo criada com sucesso";
} else {
    echo "Falha ao criar $tbtwo: " . $conect->error;
}

echo "<\n>";


$conect->close();