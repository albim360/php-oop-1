<?php 

class Movie { 
    public string $nome;
    public string $genere;
    public string $durata;
    public int $annouscita;

    function __construct($nome) {
        $this->nome = $nome;
    }
}

$film1 = new Movie("Boolnception");
$film1->genere = "Fantasy";
$film1->durata = "2 ore";
$film1->annouscita = "2023";


$film2 = new Movie("Boolengers");
$film2->genere = "Azione";
$film2->durata = "5 ore";
$film2->annouscita = "2022";


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