<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = '123456789';
$DB = 'itinerary';

//crinado conexão para o sedd
$conect = new mysqli($HOST, $USER, $PASS, $DB);

//fazendo o seed

//products seed
mysqli_query($conect, "INSERT INTO products (id, name) VALUES ('1', 'Felipe')");
mysqli_query($conect, "INSERT INTO products (id, name) VALUES ('2', 'Murilo')");
mysqli_query($conect, "INSERT INTO products (id, name) VALUES ('3', 'julio')");
 
 //itinerary seed
mysqli_query($conect, "INSERT INTO itinerary (id, name, description) VALUES ('1', 'Praia', 'Areia e agua')");

