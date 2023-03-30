<?php 

class Movie { 
    public $nome;
    public $genere;
    public $durata;
}

$film1 = new Movie();
$film1->nome = "Boolnception";
$film1->genere = "Fantasy";
$film1->durata = "2 ore";

$film2 = new Movie();
$film2->nome = "Boolengers";
$film2->genere = "Azione";
$film2->durata = "5 ore";

var_dump($film1);
var_dump($film2);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>
<body>
    <h1>  </h1>
</body>
</html>