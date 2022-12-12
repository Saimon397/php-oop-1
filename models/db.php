<?php

include 'models/movie.php';

// Istanziamento degli oggetti Movie
$movies = [
    new Movie('La vita è bella', 1997, ['commedia', 'drammatico']),
    new Movie('Avatar', 2009, ['fantascienza', 'azione']),
    new Movie('Fight Club', 1999, ['fantascienza', 'azione']),
    new Movie('Spider-Man', 2002, ['fantascienza', 'azione']),
    new Movie('Batman Begins', 2005, ['fantascienza', 'azione']),
    new Movie('Green Book', 2018, ['commedia', 'drammatico']),
    new Movie('Top Gun', 2022, ['fantascienza', 'azione']),
    new Movie('Titanic', 1997, ['commedia', 'drammatico']),
    new Movie('Joker', 2019, ['fantascienza', 'azione']),
    new Movie('Shrek', 2001, ['fantascienza', 'animazione']),
];
