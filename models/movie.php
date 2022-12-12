<?php

class Movie
{
    // Variabili d'istanza
    public $title;
    public $year;
    public $genres;

    // Costruttore
    public function __construct($title, $year, $genres)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
    }

    // Metodo
    public function getInfo()
    {
        return "Il film {$this->title} è stato realizzato nel {$this->year} e appartiene ai generi: " . implode(', ', $this->genres);
    }
}
