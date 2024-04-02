<?php
// definisco la classe
class Movie
{
    // variabili d'istanza
    public $title;
    public $language;
    public $year;

    // costruttore    
    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_language
     * @param  mixed $_year
     */
    public function __construct($_title, $_language, $_year)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
    }

    // Metodo per ottenere il titolo del film
    public function getTitle()
    {
        return $this->title;
    }
}

// istanziamento di due oggetti 'Movie'

$movie1 = new Movie("Interstellar", "Inglese", 2014);
// var_dump($movie1);
$movie2 = new Movie("Inception", "Inglese", 2010);
// var_dump($movie2);


// creo array di film
$movies = [
    $movie1,
    $movie2,
    new Movie("Barbie", "Inglese", 2023)
];

// var_dump($movies);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Film</h1>

    <ul>
        <?php
        foreach ($movies as $movie) {
            echo "
        <li>
            " . $movie->getTitle() . ", <br>
             " . $movie->language . ", <br>
             " . $movie->year . "
        </li>";
        }
        ?>
    </ul>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>