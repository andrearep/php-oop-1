<?php
require __DIR__ . '/classes/movies.php';
  

$movies =[
    new Movie('Avatar', 2011, 'Christopher Nolan', 'Fantasy', 'en'),
    new Movie('Saw', 2007, 'Bob Dylan', 'Horror', 'en'),
];
//var_dump($movies)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>films</title>

</head>

<body>
    <div class="movies">
        <?php
        foreach($movies as $movie) : ?>
        <h1> <?php echo $movie->title; ?> </h1>
        <p> <?php echo $movie->genre; ?> </p>
        <p> <?php echo $movie->year; ?> </p>
        <p> <?php echo $movie->director; ?> </p>
        <p> <?php echo $movie->original_lang; ?> </p>
        <?php endforeach; ?>
    </div>
</body>

</html>