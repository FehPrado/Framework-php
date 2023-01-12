<?php

$HOST = 'localhost';
$USER = 'root';
$PASS = '123456789';


//crinado conexão
$conect = new mysqli($HOST, $USER, $PASS);

//Drop Banco

$sqldrop = "DROP DATABASE itinerary";
if ($conect->query($sqldrop) === TRUE) {
  echo "Banco deletado com sucesso";
} else {
  echo "Falha ao deletar banco: " . $conect->error;
}

// criando banco

echo "<\n>";
echo "CRIANDO BANCO DE DADOS";
echo "<\n>";

$sql = "CREATE DATABASE itinerary";
if ($conect->query($sql) === TRUE) {
  echo "Banco criado com sucesso";
} else {
  echo "Falha ao criar banco: " . $conect->error;
}

// criando tabela
echo "<\n>";
echo "CRIANDO TABELAS";
echo "<\n>";

//products table
$sqltb = "CREATE TABLE `itinerary`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));";
if ($conect->query($sqltb) === TRUE) {
  echo "Products criada com sucesso";
} else {
  echo "Falha ao criar Produts: " . $conect->error;
}
//itiberary table
echo "<\n>";

$sqltb = "CREATE TABLE `itinerary`.`itinerary` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(100) NULL,
  PRIMARY KEY (`id`));";
if ($conect->query($sqltb) === TRUE) {
  echo "Ititnerary criada com sucesso";
} else {
  echo "Falha ao criar itinerary: " . $conect->error;
}

echo "<\n>";




$conect->close();