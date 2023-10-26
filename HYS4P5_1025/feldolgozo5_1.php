<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>
</head>
<body>
        <font style=" font-size: 18pt;">
        <h2>HTML5 űrlap_HYS4P5</h2>
        <?php

        echo ("<strong> PIN kód: </strong>" . $_POST['kod'] . "<br><br>");
        echo("<strong>Gyümölcs: </strong>" . $_POST['gyumolcs'] . "<br><br>");
        echo("<strong>Életkor: </strong>" . $_POST['eletkor'] . "<br><br>");
        echo("<strong>Lábméret: </strong>" . $_POST['labmeret'] . "<br><br>");
        echo("<strong>Önbizalom: </strong>" . $_POST['onbizalom'] . "<br><br>");

        ?>
        <a href="urlap.html">Vissza az űrlapra</a>
        </font>
</body>
</html>
