<?Php 

$squadre = [
    "roma" => [
        "Daniele De Rossi" , " ROMELU LUKAKU", "PAULO DYBALA"
    ],
    "lazio" => [
        "Ciro Immobile", "Pedro", "Matteo Guendouzi"
    ],
    "inter" =>[
        "Lautaro Martínez", "Alexis Sánchez", "Benjamin Pavard",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio numero 2</title>
</head>
<body>
<h1>Array delle squadre di serie A :</h1>

<ul><?php
         foreach ($squadre as $squadra => $giocatori) { ?>
    <li> 
        <?= $squadra ?>
            <ul><?php
                    foreach ($giocatori as $giocatore) {?>
                        <li><?= $giocatore ?></li><?php
                }?>
            </ul>
     </li><?php
    } ?>
    
</ul>
</body>
</html>