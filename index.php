<?php 
    class Movie{
        public $title;
        public $year;
        public $genre;
        public $director;
        public $duration;

        function __construct($_title, $_year, $_genre){
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
        }
    }

    $movies_1 = new Movie("Il Padrino", 1972, "Noir");
    $movies_2 = new Movie("Il cavaliere oscuro", 2009, "Azione");
    $movies_3 = new Movie("Figth Club", 1999, "Drammatico");
    $movies_4 = new Movie("Quei bravi ragazzi", 1990, "Crime");
    $movies_5 = new Movie("Pulp Fiction", 1994, "Thriller");
    $movies_6 = new Movie("Il Signore degli Anelli: Il Ritorno del Re", 2003, "Fantasy");
    $movies_7 = new Movie("Inception", 2010, "Fantascienza");
    $movies_7 = new Movie("Il pianista", 2010, "Guerra");

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Oop Movies</title>
    </head>
    <body>
        
    </body>
</html>