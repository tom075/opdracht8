<?php

$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMI($gewicht,$lengte);

function BMI($gewicht,$lengte){
    $lengte2 = $lengte/100;
    $bmi = $gewicht / ($lengte2 * $lengte2 );
    $bmi = round($bmi,1);
    echo 'je lengte is '. $lengte . '<br>';
    echo 'je gewicht is '. $gewicht. '<br>';
    echo 'je BMI is '.$bmi . '<br>';
    switch ($bmi){
        case $bmi < 18.5:
            echo 'Je hebt  ondergewicht ';
            break;
        case $bmi >= 18.5 && $bmi < 25:
            echo 'Je hebt een  normaal gewicht ';
            break;
        case $bmi >= 25 && $bmi < 27:
            echo 'Je hebt licht overgewicht';
            break;
        case $bmi >= 27 && $bmi <30:
            echo 'Je hebt  matig overgewicht ';
            break;
        case $bmi >= 30 && $bmi <40:
            echo 'Je hebt  obesitas ';
            break;
        case $bmi >= 40:
            echo 'Je hebt  morbide obesitas ';
            break;
        default:
            echo 'u heeft geen cijfers ingevuld';
    }


}
