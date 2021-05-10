<?php

    ini_set('display_errors', 1);

    class Movie {
        public $title;
        public $director;
        public $genre;
        public $year;
        public $cast;


        public function __construct($_title, $_year) {
            $this->title = $_title;
            $this->year = $_year;
        }

        public function setGenre($_genre) {
            $this->genre = $_genre;
        }

        public function getTitle() {
            return $this->title;
        }
    }



$movie_1 = new Movie('1917', "2019");
$movie_1->director = 'Sam Mendes.';
$movie_1->setGenre('Drammatico, Guerra.');
$movie_1->cast = 'George MacKay, Dean-Charles Chapman, Mark Strong, Andrew Scott, Richard Madden.';

//var_dump($movie_1);

// echo "Titolo: ".$movie_1->getTitle()."<br>"."Regia di: ".$movie_1->director."<br>"."Genere: ".$movie_1->genre."<br>"."Anno di uscita: ".$movie_1->year."<br>"."Cast: ".$movie_1->cast."<br>";

$movie_2 = new Movie('Dunkirk', "2017");
$movie_2->director = 'Christopher Nolan.';
$movie_2->setGenre('Azione, Drammatico, Storico.');
$movie_2->cast = 'Fionn Whitehead, Tom Glynn-Carney, Jack Lowden, Harry Styles, Aneurin Barnard.';

//var_dump($movie_2);

// echo "Titolo: ".$movie_2->getTitle()."<br>"."Regia di: ".$movie_2->director."<br>"."Genere: ".$movie_2->genre."<br>"."Anno di uscita: ".$movie_2->year."<br>"."Cast: ".$movie_2->cast."<br>";