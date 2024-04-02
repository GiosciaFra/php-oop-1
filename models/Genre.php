<?php
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
