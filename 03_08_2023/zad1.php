<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listy</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Wielkopolska
            <ol>
                <li>Poznań</li>
                <li>Gniezno</li>
                <li>Września</li>
            </ol>
        </li>
        <li>Dolnośląskie
            <?php
                $city = "Wrocław";
                echo "<ol>";
                    echo "<li>Legnica</li>";
                    echo "<li>$city</li>";
            ?>
                <li>Bolesławiec</li>
            </ol>
        </li>
        <li>Kujawsko-pomorskie

        </li>
    </ul>
</body>
</html>