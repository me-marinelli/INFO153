<?php

include 'index.html';
$cdegrees = $_POST['cdegrees'];
$fdegrees = $_POST['fdegrees'];
$temp = $_POST['temp'];
$fehrenheit = 32 + $temp * 9 / 5;
$celsius = ($temp - 32) * 5 / 9;


if (isset($_POST['cdegrees']) && isset($_POST['fdegrees'])){
    echo '<h3>Results</h3>';
    echo 'Temperature in Fehrenheit: ' . $fehrenheit . '<br/>';
    echo 'Temperature in Celsius: ' . $celsius . '<br/>';
    die;
}

if (isset($_POST['cdegrees']) || isset($_POST['fdegrees'])){
    echo '<h3>Results</h3>';

    if (isset($_POST['cdegrees'])):
        echo 'Temperature in Fehrenheit: ' . $fehrenheit . '<br/>';
    elseif (isset($_POST['fdegrees'])):
        echo 'Temperature in Celsius: ' . $celsius . '<br/>';
    endif;
}
?>