<?php
// definisco la classe
class Movie
{
    // variabili d'istanza
    public $title;
    public $language;
    public $year;

    public $genre;
    public $poster;
    // costruttore    
    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_language
     * @param  mixed $_year
     * @param  mixed $_genre
     * 
     */
    public function __construct($_title, $_language, $_year, $_genre, $_poster)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->poster = $_poster;
    }


    // Metodo per ottenere il titolo del film
    public function getTitle()
    {
        return $this->title;
    }
}

// creo una nuova classe che accetti più generi
class Genre
{
    public $genre1;
    public $genre2;

    public function __construct($genre1, $genre2)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
    }

    /**
     * getGenre
     *
     * restituisce i generi
     */
    public function getGenre()
    {
        return $this->genre1 . '/' . $this->genre2;
    }
}

$movie1Genre = new Genre("Sci-fi", "Avventura");
$movie1 = new Movie("Interstellar", "Inglese", 2014, $movie1Genre, "img/interstellar.jpg");

$movie2Genre = new Genre("Sci-fi", "Azione");
$movie2 = new Movie("Inception", "Inglese", 2010, $movie2Genre, "img/inception.jpg");

$movie3Genre = new Genre("Commedia", "Cinema fantastico");
$movie3 =  new Movie("Barbie", "Inglese", 2023, $movie3Genre, "./img/barbie.jpg");


// creo array di film
$movies = [
    $movie1,
    $movie2,
    $movie3

];

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

<body class=" bg-dark ">

    <h1 class="d-flex justify-content-center text-warning py-2 text-uppercase  ">Movies</h1>

    <div class="container">
        <div class="row justify-content-center ">
            <?php
            foreach ($movies as $movie) {
                echo "
            <div class='col-md-3'>
                <div class='card'>
                    <img src='" . $movie->poster . "' class='card-img-top' alt='" . $movie->getTitle() . "'>
                    <div class='card-body'>
                        <h3 class='card-title'><strong>" . $movie->getTitle() . "</strong></h3>
                        <p class='card-text'><strong>Lingua:</strong> " . $movie->language . "</p>
                        <p class='card-text'><strong>Anno uscita:</strong> " . $movie->year . "</p>
                        <p class='card-text'><strong>Genere:</strong> " . $movie->genre->getGenre() . "</p>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>


    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>