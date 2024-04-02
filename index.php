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