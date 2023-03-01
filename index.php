<?php
    $firstName = "Janusz";
    $lastName = "Nowak";
    echo "Imię i nazwisko: $firstName $lastName<br>";
    echo 'Imię i nazwisko: $firstName $lastName<br>';

    //heredoc
    echo <<< DATA
        <hr>
        Imię: $firstName<br>
        Nazwisko: $lastName
        <br>
    DATA;

    $data = <<< DATA
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName
    <br>
    DATA;

    echo $data;

    $data1 = <<< 'DATA'
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName
    <br>
    DATA;

    echo $data1;

    $hr = "<hr>";
    echo $hr;

    $bin = 0b1010;
    echo $bin.$hr; //10

    $oct = 0101;
    echo $oct.$hr; //65

    $hex = 0x1A;
    echo $hex.$hr; //26

    echo PHP_VERSION;

    $x = 1;
    $y = 1.0;

    echo $hr.gettype($x)." | ".gettype($y).$hr;

    if ($x==$y) {
        echo "Równe";
    } else {
        echo "Różne";
    }

    echo $hr;

    if ($x===$y) {
        echo "Równe";
    } else {
        echo "Różne";
    }
    
?>