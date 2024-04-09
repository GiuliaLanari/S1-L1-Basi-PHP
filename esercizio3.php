<?Php 
$partite = [
     [

        "info"=> [
            "date"=> "14.04.2023"
        ],

        "team1"=>[
            "name"=> "Roma",
            "formazione" => [
                "Paulo Dybala", "Romelu Lukaku", "Sardar Azmoun", "Gianluca Mancini"
            ]
        ],
        "team2"=> [
            "name"=>"Lazio",
            "formazione"=> [
                "Lautaro Martínez", "Alexis Sánchez", "Benjamin Pavard", "Daichi Kamada"
            ] 
        ]
    ],
    [

        "info"=> [
            "date"=> "20.10.2010"
        ],

        "team1" =>[
            "name"=>"Juve",
            "formazione"=> [
                "Kenan Y", "Paul Pogba", "Federico Chiesa", "Carlos Alcaraz",
            ]
        ],
        "team2" =>[
            "name"=>"Inter",
            "formazione"=>[
                "Marcus Thuram", "Benjamin Pavard", "Francesco Acerbi", "Yann Sommer"
            ]
        ]  
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio numero 3</title>
</head>
<body>
<h1>Crea l'array delle partite e delle squadre di serie A e della relativa formazione</h1>

<ul>
    <?php
        foreach($partite as $partita){?>
        <h2><?= $partita['team1']['name'] . " ---- " . $partita['team2']['name'] ?></h2>
        <p>Data della partita: <?= $partita['info']['date'] ?></p>
        <div>
        <ul>
        <h4><?= $partita['team1']['name']  ?></h4>
        <p>Formazione:</p>
            <?php
                    foreach ($partita['team1']['formazione'] as $giocatori) {?>

                        <li><?= $giocatori ?></li><?php
                }?>
            </ul>
        </div>
        <div>
        <ul>
        <h4><?= $partita['team2']['name']  ?></h4>
        <p>Formazione:</p>
            
            <?php
                    foreach ($partita['team2']['formazione'] as $giocatori) {?>
                    
                        <li><?= $giocatori ?></li><?php
                }?>
            </ul>
        </div>
        <?php

        }?>


</ul>








</body>
</html>