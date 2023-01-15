<?php

require 'define.php';

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
  `img` VARCHAR(100) NULL,
  `date_start` VARCHAR(100) NULL,
  `date_end` VARCHAR(100) NULL,

  PRIMARY KEY (`id`));";
if ($conect->query($sqltb) === TRUE) {
    echo "$tbtwo criada com sucesso";
} else {
    echo "Falha ao criar $tbtwo: " . $conect->error;
}

echo "<\n>";

$sqltb = "CREATE TABLE `$dbname`.`$tbthree` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NULL,
    `email` VARCHAR(100) NULL,
    `password` VARCHAR(100) NULL,
    PRIMARY KEY (`id`));";
  if ($conect->query($sqltb) === TRUE) {
      echo "$tbthree criada com sucesso";
  } else {
      echo "Falha ao criar $tbthree: " . $conect->error;
  }
  echo "<\n>";
  $sqltb = "CREATE TABLE `$dbname`.`$tbfour` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `id_user` VARCHAR(45) NULL,
    `id_itinerary` VARCHAR(100) NULL,
    PRIMARY KEY (`id`));";
  if ($conect->query($sqltb) === TRUE) {
      echo "$tbfour criada com sucesso";
  } else {
      echo "Falha ao criar $tbfour: " . $conect->error;
  }
  echo "<\n>";


$conect->close();