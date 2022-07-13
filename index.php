<?php
require_once __DIR__ . "/db/db.php";

//Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="style.css">
    <title>Albums con PHP</title>
</head>

<body>
    <div class="bg-dark p-5">
        <div class="container flex-grow-1">
            <div class="pt-5 pb-2 px-1">
                <div class="row row-cols-2 row-cols-md-5">
                    <?php
                    foreach ($dati as $album) {
                        echo "<div class='col mb-3'>";
                        echo  "<div class='card text-center h-100'>";
                        echo "<img class='card-img-top img-poster' src='$album[poster]' alt='$album[title]'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>$album[title]</h5>";
                        echo "<div class='text-muted'>";
                        echo  "<h6>$album[author]</h6>";
                        echo "</div>";
                        echo "<div class='text-muted'>";
                        echo "<span  class='fs-6'>$album[year]</span>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>













</body>

</html>