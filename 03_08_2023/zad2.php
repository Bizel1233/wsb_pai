<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Początek</h4>
    <?php
        require("./scripts/list.php");
        echo "<hr>";
        include("./scripts/list.php");
        echo "<hr>";
        require_once("./scripts/list.php");
    ?>
    <h4>Koniec</h4>
</body>
</html>