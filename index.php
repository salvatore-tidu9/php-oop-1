<?php
    include __DIR__ . "/class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP_OOP_1</title>
</head>
<body>

    <div class="card">
        <h2>Titolo: <?php echo $movie_1->getTitle() ?></h2>
        <h4>Regia di: <?php echo $movie_1->director ?></h4>
        <h4>Genere: <?php echo $movie_1->genre ?></h4>
        <h4>Anno di uscita: <?php echo $movie_1->year ?></h4>
        <h4>Cast: <?php echo $movie_1->cast ?></h4>
    </div>

    <div class="card">
        <h2>Titolo: <?php echo $movie_2->getTitle() ?></h2>
        <h4>Regia di: <?php echo $movie_2->director ?></h4>
        <h4>Genere: <?php echo $movie_2->genre ?></h4>
        <h4>Anno di uscita: <?php echo $movie_2->year ?></h4>
        <h4>Cast: <?php echo $movie_2->cast ?></h4>
    </div>

</body>
</html>