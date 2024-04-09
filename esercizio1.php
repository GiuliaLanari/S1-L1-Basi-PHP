<?php 
$italian_days=[
    "Domenica",
    "Lunedi",
    "Martedi",
    "Mercoledi",
    "Giovedi",
    "Venerdi",
    "Sabato",
];

$italian_month= [
    "Novembre",
    "Gennaio",
    "Febraio",
    "Marzo",
    "Aprile",
    "Maggio",
    "Giugno",
    "Luglio",
    "Agosto",
    "Settembre",
    "Ottobre",
    
];

$day_ita= $italian_days[date("w")];
$day_num= date("j");
$month_ita= $italian_month [date("n")];
$year= date("Y")






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>


<?= "$day_ita, $day_num $month_ita $year"; ?>

    
</body>
</html>