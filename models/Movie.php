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
