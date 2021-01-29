<?php
$pizza = [
    [
        "Art" => "Magerita",
        "Preis1" => "5",
        "Preis2" => "5,5",
        "Preis3" => "7",
    ], 
    [
        "Art" => "Salami", 
        "Preis1" => "6",
        "Preis2" => "6,5",
         "Preis3" => "8",
    ],
    [
        "Art" => "Tuna",
        "Preis1" => "7",
        "Preis2" => "7,5",
        "Preis3" => "9",
    ],
    [
        "Art" => "Vegan",
        "Preis1" => "6",
        "Preis2" => "6,5",
        "Preis3" => "7,5",
    ],
];




print '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speisekarte</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div id="webcontent">
<div id="preisliste">
    <h2>Speisekarte</h2>

    <table>
        <tr>
            <th></th>
            <th>Durchmesser</th>
            <th>Preis ($)</th>
        </tr>
        '.buildDishes($pizza).'
    </table>
</div>

<hr>

<div id="kontakt">
    <table>
        <tr>
            <th colspan="2"><h2>Kontakt</h2></th>
        </tr>
        <tr>
            <td>Hauptsitz</td>
            <td>jgklaöfjklaödjlasöf</td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td>0692847234</td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>isdjooawi@yahoo.de</td>
        </tr>
        <tr>
            <td>Fax</td>
            <td>uoshfnclsnofnlfn</td>
        </tr>
    </table>
</div>

<hr>

<div id="impressum">
    <h2>Impressum</h2>
    <p>Frankafurt</p>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>';

function buildDishes(array $dishes): string 
{
    $template = '<tr>
    <td rowspan="3">%1$s</td>
    <td>26cm</td>
    <td>%2$s</td>
</tr>
<tr>
    <td>32cm</td>
    <td>%3$s</td>
</tr>
<tr>
    <td>38cm</td>
    <td>%4$s</td>
</tr>';
$result = '';
foreach($dishes as $tr) {    //Kommentar
    $result .= vsprintf($template, [ $tr["Art"],$tr["Preis1"],$tr["Preis2"],$tr["Preis3"]]);
} 
return $result;
} 