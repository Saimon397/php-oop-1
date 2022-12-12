<?php

include 'models/movie.php';

// Istanziamento di due oggetti Movie
$movies = [
    new Movie('La vita è bella', 1997, ['commedia', 'drammatico']),
    new Movie('Avatar', 2009, ['fantascienza', 'azione']),
];
