<?php
require 'db.php'

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
                <div class='card bg-black  '  >
                    <img src='" . $movie->poster . "' class='card-img-top object-fit-cover'  alt='" . $movie->getTitle() . "'>
                    <div class='card-body m-3 text-white ' >
                        <h3 class='card-title text-warning  text-uppercase '><strong>" . $movie->getTitle() . "</strong></h3>
                        <p class='card-text  mb-1 '><strong>Lingua:</strong> " . $movie->language . "</p>
                        <p class='card-text  mb-1'><strong>Anno uscita:</strong> " . $movie->year . "</p>
                        <p class='card-text  mb-1'><strong>Genere:</strong> " . $movie->genre->getGenre() . "</p>
                        <p class='card-text  mb-1'><strong>Regista:</strong> " . $movie->director->getInfoDirector() . "</p>

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