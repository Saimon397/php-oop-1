<?php

include './models/db.php';

foreach ($movies as $movie) {
    echo $movie->getInfo() . "<br>";
}
