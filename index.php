<?php 

class Movie { 
    public string $nome;
    public string $genere;
    public int $durataOre;
    public int $annoUscita;
    public int $prezzo;

    function __construct($nome, $genere, $durataOre, $annoUscita) {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->durataOre = $durataOre;
        $this->annoUscita = $annoUscita;
        $this->prezzo = $this->calcolaPrezzo();
    }

    function calcolaPrezzo() {
        $prezzoPerOra = 2;
        return $this->durataOre * $prezzoPerOra;
    }
}

$film1 = new Movie("Boolnception", "Fantasy", 2, 2023);
$film2 = new Movie("Boolengers", "Azione", 5, 2022);

echo "<h2>Film 1:</h2>";
echo "<p>Titolo: " . $film1->nome . "</p>";
echo "<p>Genere: " . $film1->genere . "</p>";
echo "<p>Durata: " . $film1->durataOre . " ore</p>";
echo "<p>Anno di uscita: " . $film1->annoUscita . "</p>";
echo "<p>Prezzo noleggio: €" . $film1->prezzo . "</p>";

echo "<h2>Film 2:</h2>";
echo "<p>Titolo: " . $film2->nome . "</p>";
echo "<p>Genere: " . $film2->genere . "</p>";
echo "<p>Durata: " . $film2->durataOre . " ore</p>";
echo "<p>Anno di uscita: " . $film2->annoUscita . "</p>";
echo "<p>Prezzo biglietto: €" . $film2->prezzo . "</p>";

?>
