<?php 
    class Movie{
        public $title;
        public $year;
        public $genre;
        public $director;
        public $oscars = 1;

        function __construct($_title, $_year, $_genre){
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
        }

        public function setOscars($statuette){
            if($statuette > 1){
                $this->oscars = $statuette;
            }
        }
        public function getOscars(){
            return $this->oscars;
        }

    }

    $movies_1 = new Movie("Il Padrino", 1972, "Noir");
    $movies_1->setOscars(3);
    $movies_1->director = "Francis Ford Coppola";

    $movies_2 = new Movie("Il cavaliere oscuro", 2009, "Azione");
    $movies_2->setOscars(2);
    $movies_2->director = "Christopher Nolan";

    $movies_3 = new Movie("La vita e' bella", 1999, "Drammatico");
    $movies_3->setOscars(3);
    $movies_3->director = "Roberto Benigni";

    $movies_4 = new Movie("Quei bravi ragazzi", 1990, "Crime");
    $movies_4->director = "Martin Scorsese";

    $movies_5 = new Movie("Pulp Fiction", 1994, "Thriller");
    $movies_5->director = "Quentin Tarantino";

    $movies_6 = new Movie("Il Signore degli Anelli: Il Ritorno del Re", 2003, "Fantasy");
    $movies_6->setOscars(11);
    $movies_6->director = "Peter Jackson";

    $movies_7 = new Movie("Inception", 2010, "Fantascienza");
    $movies_7->setOscars(4);
    $movies_7->director = "Christopher Nolan";

    $movies_8 = new Movie("Il pianista", 2010, "Guerra");
    $movies_8->setOscars(3);
    $movies_8->director = "Roman Polanski";


    echo "<div>".$movies_1->title." e' un film ".$movies_1->genre." girato dal regista ".$movies_1->director." nel ".$movies_1->year." ed ha vinto ".$movies_1->oscars." premi Oscar."."</div>";
    echo "<div>".$movies_6->title." e' un film ".$movies_6->genre." girato dal regista ".$movies_6->director." nel ".$movies_6->year." ed ha vinto ".$movies_6->oscars." premi Oscar."."</div>";
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