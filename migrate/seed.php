<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = '123456789';


//crinado conexão para o sedd
$conect = new mysqli($HOST, $USER, $PASS);


//fazendo o seed

//products seed

mysqli_query($conect, "INSERT INTO 'itinerary'.'products' ('id', 'name') VALUES ('1', 'Felipe')");
mysqli_query($conect, "INSERT INTO 'itinerary'.'products' ('id', 'name') VALUES ('2', 'Murilo')");
mysqli_query($conect, "INSERT INTO 'itinerary'.'products' ('id', 'name') VALUES ('3', 'julio')");
 
 //itinerary seed
mysqli_query($conect, "INSERT INTO 'itinerary'.'itinerary' ('id', 'name', 'description') VALUES ('1', 'Praia', 'Areia e agua')");

