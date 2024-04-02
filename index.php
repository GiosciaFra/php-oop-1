<?php
// definisco la classe
class Movie
{
    // variabili d'istanza
    public $title;
    public $language;
    public $year;

    // costruttore
    public function __construct($title, $language, $year)
    {
        $this->title = $title;
        $this->language = $language;
        $this->year = $year;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>