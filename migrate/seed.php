<?php
require 'define.php';
//crinado conexão para o sedd
// $conect = new mysqli($HOST, $USER, $PASS, $dbname);
mysqli_select_db($conect, $dbname);

//fazendo o seed
echo("Fazendo o seed");

echo "<\n>";
//products seed
echo "Fazendo seed na tabela $tbone";

mysqli_query($conect, "INSERT INTO $tbone (id, name) VALUES ('1', 'Felipe')");
mysqli_query($conect, "INSERT INTO $tbone (id, name) VALUES ('2', 'Murilo')");
mysqli_query($conect, "INSERT INTO $tbone (id, name) VALUES ('3', 'julio')");

echo "<\n>";
//itinerary seed
echo "Fazendo seed na tabela $tbtwo";
mysqli_query($conect, "INSERT INTO $tbtwo (id, name, description, img, date_start, date_end) VALUES ('1', 'Praia', 'Areia e agua', 'praia.jpg', '10/01/2023', '20/01/2023')");
mysqli_query($conect, "INSERT INTO $tbtwo (id, name, description, img, date_start, date_end) VALUES ('2', 'Campos', 'Gelado', 'campos.jpg', '10/01/2023', '20/01/2023')");
mysqli_query($conect, "INSERT INTO $tbtwo (id, name, description, img, date_start, date_end) VALUES ('3', 'Roça', 'Mato e barro', 'roça.jpg', '10/01/2023', '20/01/2023')");
mysqli_query($conect, "INSERT INTO $tbtwo (id, name, description, img, date_start, date_end) VALUES ('4', 'itatiaia', 'itatiaia', 'itatiaia.jpg', '10/01/2023', '20/01/2023')");


echo "<\n>";
//users seed
echo "Fazendo seed na tabela $tbthree";
mysqli_query($conect, "INSERT INTO $tbthree (id, name, email, password) VALUES ('1', 'Felipe', 'f@gmail.com', '123')");
echo "<\n>";



