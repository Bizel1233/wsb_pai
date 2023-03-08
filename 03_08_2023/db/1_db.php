<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy z bazy danych</h4>
    <?php
        require_once("../scripts/dbConnect.php");

        $sql = "SELECT * FROM `users`";
        $result = $conn -> query($sql);
        while($user = $result->fetch_assoc()) {
        //print_r($user);
            //echo "Imie i nazwisko: ".$user["firstName"]." ".$user["lastName"]."<br>";
            echo <<< USER
                Imię i nazwisko: $user[firstName] $user[lastName]
                Data urodzenia: $user[birthday]
                <hr>
            USER;
        }


    ?>
</body>
</html>