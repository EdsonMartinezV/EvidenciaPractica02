<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edson Jahir Martinez Vasquez</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';
        use EdsonMtz\PooEvidence\RubiksCube;
        use EdsonMtz\PooEvidence\Toy;

        $toy1 = new Toy("Red ball", 10, "sports");
        $cube1 = new RubiksCube("Moyu cube", 100, "puzzles", 3, "stickerless");

        echo "<h1>".$toy1->getName()."</h1>";
        echo "<p>".$toy1->describe()."</p>";
        echo "<p>".$toy1->play()."</p>";

        echo "<h1>".$cube1->getName()."</h1>";
        echo "<p>".$cube1->describe()."</p>";
        echo "<p>".$cube1->play()."</p>";
        echo "<p>".$cube1->solve()."</p>";
        echo "<p>".$cube1->solve(2)."</p>";
    ?>
</body>
</html>