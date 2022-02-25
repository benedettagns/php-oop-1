<?php

class Movie {
    public $title;
    public $filmDirector;
    public $releaseYear;
    public $originalLanguage;

    function __construct(string $_title, string $_filmDirector, string  $_releaseYear, string $_originalLanguage) {
        $this->title = $_title;
        $this->filmDirector = $_filmDirector;
        $this->releaseYear = $_releaseYear;
        $this->originalLanguage = $_originalLanguage;
      }
      public function print() {
        return $this->title . "<br/>" . $this->filmDirector . "<br/>" . $this->releaseYear . "<br/>" . $this->originalLanguage;
      }
}

$film = new Movie("Arancia Meccanica", "Stanley Kubrick", "1971", "inglese");
// $film->title = "Arancia Meccanica";
// $film->filmDirector = "Stanley Kubrick";
// $film->releaseYear = "1971";
// $film->originalLanguage = "inglese";

$cinema = new Movie("Batman Begins", "Christopher Nolan", "2005", "inglese");
// $cinema->title = "Batman Begins";
// $cinema->filmDirector = "Christopher Nolan";
// $cinema->releaseYear = "2005";
// $cinema->originalLanguage = "inglese";


// var_dump($film);
// var_dump($cinema);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div>
            <?php echo $film->print(); ?>
        </div>

        <div>
            <?php echo $cinema->print(); ?>
        </div>
    </div>   
</body>
</html>