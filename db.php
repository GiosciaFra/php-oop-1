<?php


require './Models/Movie.php';
require './Models/Genre.php';


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
