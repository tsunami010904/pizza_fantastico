<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>order</title>
        <link rel="stylesheet" href="style1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div id="webcontent">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
                <div class="container-xl">
                <a class="navbar-brand" href="index.html"><img src="Pizza_slice_icon.png" alt="Pizza icon"/>Pizza Fantastico</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarsExample07XL">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="ueber_uns.html">Über uns</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Speisekarte</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <li><a class="dropdown-item" href="speisekarte.html">Angebot</a></li>
                        <li><a class="dropdown-item" href="speisekarte.html">Klassiker</a></li>
                        <li><a class="dropdown-item" href="speisekarte.html">Pizza-Vielfalt</a></li>
                        <li><a class="dropdown-item" href="speisekarte.html">Allergien</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Bestellen</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <li><a class="dropdown-item" href="bestellen.html">Aus der Speisekarte</a></li>
                        <li><a class="dropdown-item" href="bestellen.html">Eigene Kreation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt" tabindex="-1">Kontakt</a>
                    </li>
                    </ul>
                    <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
               </div> 
            </nav>
            <div id="bestellen">
                <h2>Bestellen</h2>
                <p>Bitte beachten sie, dass aufgrund der Covid19 Krise Lieferzeiten evtl nicht eingehalten werden können.</p>

                <ul>
                    <li>Ab 10$ Besetllwert, kostenloser Versand</li>
                    <li>Ab 5$  Besetllwert, 50% Versandkosten</li>
                    <li>Unter 5§ Bestellwert, keine Erstattung</li>
                </ul>
                <hr>
            </div>
           
                    </div>

                </form>
            </div>

            <hr>

            <?php
            
            ?>
                    
                    <br>
            <div id="checkbox">
            <h3>Was möchtest du auf deiner Pizza haben?</h3>
    <form method="POST" >

    
                         

    <div id="eigene_Pizza_zusammenstellen">
                    <h3>Oder kreiere deine eigene Pizza!</h3>
                    <div id="teig_waehlen">
                        <p>Hier kannst du dein Pizzateig auswählen!</p>
                        <label for="Teig">Teig</label>
                        <input list="Teigarten" id="Teig" name="Zutat[]" placeholder="auswählen">
                    
                        <datalist id="Teigarten">
                            <option value="Normal"></option>
                            <option value="Kartoffel"></option>
                            <option value="Knoblauch"></option>
                            <option value="Kürbis"></option>
                            <option value="Süß"></option>
                            <option value="Vegan"></option>
                            <option value="Glutenfrei"></option>
                            <option value="Lactosefrei"></option>
                        </datalist>
                    </div>
    <p><input type="checkbox" name="Zutat[]" value="Salami"/>Salami </p>
    <p><input type="checkbox" name="Zutat[]" value="Käse">Käse</p>
    <p><input type="checkbox" name="Zutat[]" value="Peperoni">Peperoni</p>
    <p><input type="checkbox" name="Zutat[]" value="Champignon">Champignon</p>
    <p><input type="checkbox" name="Zutat[]" value="Paprika">Paprika</p>
    <p><input type="checkbox" name="Zutat[]" value="Thunfisch">Thunfisch</p>
    <p><input type="checkbox" name="Zutat[]" value="Ananas">Ananas</p>




    

    </div>
    <div class="durchmesser_wählen">

<p>Wie groß soll die Pizza sein?</p>

<label for="gr1">26cm:</label>
<input type="radio" name="Zutat[]" id="gr1" value="26cm"><br>
<label for="gr2">32cm:</label>
<input type="radio" name="Zutat[]" id="gr2" value="32cm"><br>
<label for="gr3">38cm:</label>
<input type="radio" name="Zutat[]" id="gr3" value="38cm"><br>
</div>
<p><input type="submit" name="submit" value="Submit"></p>
</form>
<br>
</body>
</html>
<?php




$zutaten = "";
if (isset($_POST["submit"]))
{
    if(!empty($_POST["Zutat"]))
    {    
         
        
        foreach($_POST["Zutat"] as $zutat)
        {
            echo $zutat ." ,";
            $zutaten .=  $zutat ."\t";
        }
    }
    else 
    {
        echo"<h3>Bitte wähle mindestens eine Zutat aus</h3>";
    }
}
$filename = "data.txt";
file_put_contents($filename, $zutaten);



?>