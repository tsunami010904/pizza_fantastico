<?php
// include_once "src/Controller/OrderController.php"; 

include_once 'repository.php';

/*
$controllerName = 'Default';
$actionName = 'index';
$defaultAction = 'indexAction';
if (isset($_POST['controller'])&&!empty($_POST['controller'])){
    $controllerName = ucfirst(trim($_POST['controller']));
}
if (isset($_POST['action'])&&!empty($_POST['action'])){
    $actionName = lcfirst(trim($_POST['action']));
}
$className = '\Controller\\'.$controllerName.'Controller';
*/

$sliderRepository = new SliderRepository;

/*
if(class_exists($className)){
    (another-comment start) @var \Controller\OrderController $controller (another-comment end)
    $controller =  new $className();
    if(method_exists($controller,$actionName.'Action')){
        $actionName .= 'Action';
        $controller->$actionName();
    }
    else  if(method_exists($controller,$defaultAction)){
        $controller->$defaultAction();
    }
    $controller->calculatorAction();
    
}
*/

// get the array for the slider in the big slider section
$sliderRepository->setCsvFile('csv/bigSlider.csv');
$bigSlider = $sliderRepository->readCsvFile();

// get the array for the slider in the about us section
$sliderRepository->setCsvFile('csv/mySlider.csv');
$aboutUsSlider = $sliderRepository->readCsvFile();

// get the array for the slider in the about us section
$sliderRepository->setCsvFile('csv/menu.csv');
$pizza = $sliderRepository->readCsvFile();

// The array $pizzaOld is not necessary if getting the csv-file works
$pizzaOld = [
    [
        "name" => "Margherita",
        "picture" => "images/meals/pizza5.jpg",
        "ingredients" => "Tomatensauce, Käse, Basilikum",
        "price1" => "5, 00",
        "price2" => "5, 50",
        "price3" => "7, 00",
    ], 
    [
        "name" => "Salami", 
        "picture" => "images/meals/pizza2.jpg",
        "ingredients" => "Tomatensauce, Käse, Salami",
        "price1" => "6, 00",
        "price2" => "6, 50",
        "price3" => "8, 00",
    ],
    [
        "name" => "Tuna",
        "picture" => "images/meals/pizza6.jpg",
        "ingredients" => "Tomatensauce, Käse, Thunfisch, Zwiebeln",
        "price1" => "7, 00",
        "price2" => "7, 50",
        "price3" => "9, 00",
    ],
    [
        "name" => "Vegan",
        "picture" => "images/meals/pizza7.jpg",
        "ingredients" => "Tomatensauce, frische Tomaten, Basilikum",
        "price1" => "6, 00",
        "price2" => "6, 50",
        "price3" => "7, 50",
    ],
];

print '<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Fantastico</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=El+Messiri:500|Lobster" rel="stylesheet">
        <!-- Minh Thais links -->
        <link rel="stylesheet" href="css/style1.css">
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div id="page-wrapper">
            <!-- navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 fixed-top opacityLess">
                <div class="container-xl">
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="Pizzeria Logo"/> Pizza Fantastico</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#aboutUs">Über uns</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#menu">Speisekarte</a>
                            </li> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Bestellen</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                                    <li><a class="dropdown-item" href="#menu">Aus der Speisekarte</a></li>
                                    <li><a class="dropdown-item" href="#bestellen">Eigene Kreation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact" tabindex="-1">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- main section -->
            <section id="main">
                <div class="inner">
                    <h2 class="animated bounceInDown restaurant-name">Pizza Fantastico
                        <br />
                        SEIT 1971
                    </h2>
                    <br/>
                    <br/>
                    <p class="animated bounceInRight object-restaurant-description-1">Das <br />
                        original italienische <br />
                        Restaurant <br />
                    </p>
                    <p class="animated fadeInUp object-restaurant-description-2">Am Frankfurter Hauptbahnhof</p>
                    <br/>
                    <br/>
                    <br/>
                    <p class="animated fadeInLeft object-restaurant-description-2">Herzlich Willkommen</p>
                </div>
                <a href="#openingHours" class="more scrolly animated fadeInDown whiteLink">Unsere Öffnungszeiten</a>
            </section>

            <div class="whiteSection">
                <!-- big Slider section -->
                <section id="bigSlider">
                    <div class="container">
                        <div id="bigSliderCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <ol class="carousel-indicators">';
            
                            for ($i = 0; $i < count($bigSlider); $i++) {
                                $active = "";
                                if ($i == 0) {
                                    $active = "active";
                                }
                                print '<li data-bs-target="#bigSliderCarousel" data-bs-slide-to="' . $i . '" class="' . $active . '"></li>';
                            }
            
                            print '
                            </ol>
                    
                            <div class="carousel-inner">';
                            
                            $active2 = " active";
                            foreach ($bigSlider as $slide) {
                                print '
            
                                <div class="carousel-item' . $active2 . '">
                                    <div class="myBackgroundImages" style="background-image: url(' . $slide[3] . ')"></div>  
                                    <div class="container">
                                        <div class="carousel-caption' . $slide[5]. '">
                                            <h1>' . $slide[0] . '</h1>
                                            <p>' . $slide[1] . '</p>
                                            <p><a class="btn btn-lg btn-primary" href="' . $slide[4] . '" role="button">' . $slide[2] . '</a></p>
                                        </div>
                                    </div>
                                </div>';
                                $active2 = "";
                            }
                    
                            print '
                                <a class="carousel-control-prev" href="#bigSliderCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#bigSliderCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
        
                <div class="container marketing">
        
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <div class="col-lg-4 text-center">
                                <img src="images/sliders_icons/pict10.jpg" alt="lieferando" class="iconPictures">
                        
                                <h2>Kontaktlose Lieferung</h2>
                                <p>Dank unseres Partners Lieferando wird Ihre Pizza zuverlässig zugestellt.</p>
                                <p><a class="btn btn-secondary" href="https://www.lieferando.de" target="_blank" role="button">Besuche lieferando.de »</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4 text-center">
                            <img src="images/sliders_icons/pict8.jpg" alt="virus" class="iconPictures">
                        
                                <h2>Covid-19</h2>
                                <p>Wegen der Corona-Pandemie ist es leider nicht möglich, vor Ort zu essen. Ihre Bestellung wird in unseren Restaurants zur Abholung oder zur Lieferung zubereitet.</p>
                                <p><a class="btn btn-secondary" href="#openingHours" role="button">Unsere Öffnungszeiten »</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4 text-center">
                                <img src="images/sliders_icons/pict7.jpg" alt="cook" class="iconPictures">
                        
                                <h2>Auf Jobsuche?</h2>
                                <p>Beginnen Sie Ihre Karriere bei Pizza Fantastico! Abwechslungsreiche Tätigkeiten, flexible Arbeitszeiten und freundliche Kollegen warten auf Sie! </p>
                                <p><a class="btn btn-secondary" href="#career" role="button">Ihre Möglichkeiten »</a></p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                    <br>
                
                </div>

                <!-- about us section -->
                <section id="aboutUs">
                    <hr>
                    <br>
                    <div class="container">                    
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static pizzaBackground">
                                <strong class="d-inline-block mb-2 text-primary">#1971</strong>
                                <h3 class="mb-0">Über uns</h3>
                                <div class="mb-1 text-muted">2. Feb</div>
                                <h5 class="card-text mb-auto">Wir betreiben seit 1971 ein traditionelles itatienisches Restaurant im Herzen Frankfurts. Hier sind einige Eindrücke.</h5>
                            </div>
                            <div class="col-md-8 mx-auto d-lg-block">
                                <div id="aboutUsCarousel" class="carousel slide " data-bs-ride="carousel">
                                    <ol class="carousel-indicators">';

                                    for ($i = 0; $i < count($aboutUsSlider); $i++) {
                                        $active = "";
                                        if ($i == 0) {
                                            $active = "active";
                                        }
                                        print '<li data-bs-target="#aboutUsCarousel" data-bs-slide-to="' . $i . '" class="' . $active . '"></li>';
                                    }

                                    print '
                                    </ol>
                            
                                    <div class="carousel-inner">';
                                    
                                    $active2 = " active";
                                    foreach ($aboutUsSlider as $slide) {
                                        print '

                                        <div class="carousel-item smallItem' . $active2 . '">
                                            <div class="mySmallBackgroundImages" style="background-image: url(' . $slide[1] . ')"></div>  
                                            <div class="container">
                                                <div class="carousel-caption mb-5">
                                                    <h3>' . $slide[0] . '</h3>
                                                </div>
                                            </div>
                                        </div>';
                                        $active2 = "";
                                    }
                            
                                    print '
                                        <a class="carousel-control-prev" href="#aboutUsCarousel" role="button" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#aboutUsCarousel" role="button" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!--Dishes-->
                <div id="menu">
                    <br><br>
                    <table class="newDishes">
                        <thead class="mealHead">
                            <tr>
                                <th colspan="2"><i>Speisekarte</i></th>
                                <th style="font-size: 40px;">⌀</th>
                                <th>Preis(€)</th>
                            </tr>
                        </thead>
                        '.buildDishes($pizza).'
                    </table>
                </div>
            </div>
            
            <div id="webcontent">
                <div id="bestellen">
                    <h2>Bestellen</h2>
                    <p>Bitte beachten sie, dass aufgrund der Covid19 Krise Lieferzeiten evtl nicht eingehalten werden können.</p>

                        <ul>
                            <li>Ab 10$ Besetllwert, kostenloser Versand</li>
                            <li>Ab 5$  Besetllwert, 50% Versandkosten</li>
                            <li>Unter 5$ Bestellwert, keine Erstattung</li>
                         </ul>
                     <hr>
                </div>
           
            </div>

                </form>
            </div>

            
                    
                    <br>
            <div id="checkbox">
                     <h3>Was möchtest du auf deiner Pizza haben?</h3>
                 <form method="POST" action="index.php" >
                 <input type="hidden" name="controller" value="order"/>
                 <input type="hidden" name="action" value="calculator"/>

    
                         

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
            <!--Please insert your career-code here-->
            <div class="banner" id="career">
            <div class="container">
            <div class="row">
              <div class="col-12">
                <h1>Karriere</h1> <hr>
                <h2>Starten sie bei uns ihre Berufsbahn und erleben sie Freude, Spass und Fairness!<hr></h2>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.
                </p>
              </div>
              <div class="col-6"><p class="lol">Unsere Normen und Werte</p><hr>
                <p>Bei uns wird ganz genau auf das <i>Wohlergehen</i> unserer Kunden und <b>Mitarbeiter</b> geachtet!
                Wir achten darauf, dass diese gesund und stets fröhlich ihre Arbeit verrichten und bei Hilfe 
                nicht Vernachlässigt werden. Nicht zufällig sind all unsere Bäcker sehr zufrieden mit ihrem Beruf
                und stecken in ihre Arbeit viel Liebe rein! Bei Bewerbungen gelten also die Fähigkeiten nicht 
                als ausschlaggebend, sondern unsere Werte wie Hilfsbereitschaft und Nettigkeit. Eine Welt ohne diesen
                Werten, kann sich niemand von uns vorstellen.</p>
              </div>
                <div class="col-6"><p class="lol">Unser wertvollstes Gut</p><hr>
                    <p>
                    Unser Wertvollstes Gut ist nicht die Pizza, oder das Geschäft, oder vielleicht der Kunde, nein, es sind unsere 
                    <b>Mitarbeiter</b>! Klar sind die Kunden für uns auch sehr wichtig und wir lieben sie mindestens genauso sehr,
                    wie wir uns selbst lieben, aber unsere Mitarbeiter sind und werden immer unsere Priorität sein. Kunden kommen
                    und gehen, Mitarbeiter aber prägen unsere Bäckerei und hinterlassen ein Vermächtnis. Deswegen ist es uns
                    sehr wichtig, dass diese sich wohlfühlen und Spaß an ihrem Beruf empfinden!
                    </p>
                </div>
            </div>
          </div>
                   
                                    <div class="quote">
                                        <h3>"So eine tolle und  <br>
                                            aufregende Arbeit <br>
                                            möchte ich niemals <br>
                                            aufgeben!" </h3>
                                            <h4>~Luigi Musomicci, unser Bäcker</h4>
                                
                
                                     </div>
            </div>
       
    
    
    
            <!--footer start-->
            <footer class="page-footer bg-dark" id="footer">
                <div class="bg-success h2">
                    <div class="container">
                        <div class="row py-4 d-flex align-items-center">
                            <div class="col-md-12 text-center">
                                <a href="https://de-de.facebook.com/" target="_blank"><i class="fab fa-facebook-square text-white mr-4"></i></a>
                                <a href="https://twitter.com/?lang=de" target="_blank"><i class="fab fa-twitter text-white mr-4"></i></a>
                                <a href="https://github.com/tsunami010904/pizza_fantastico.github.io" target="_blank"><i class="fab fa-github text-white mr-4"></i></a>
                                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube text-white mr-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="container text-center text-md-center text-white mt-5">
                    <div class="row">
                        <div id="motto" class="col-md-4 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Unser Motto</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto">
                            <p class="mt-2 ">
                                <i class="fas fa-quote-right"></i>
                                <i> In der Weihnachtsbäckerei, gibt es manche Leckerei, zwischen Mehl und Tomatensauce macht so mancher Knilch eine riesengroße Kleckerei, in der Weihnachtsbäckerei, in der Weihnachtsbäckerei ... </i>
                                <i class="fas fa-quote-left"></i>
                            </p>
                        </div>
                        <div id="openingHours" class="col-md-4 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Unsere Öffnungszeiten</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto">
                            <table>
                            <tr>
                                <td>Montag</td>
                                <td>8:00 - 20:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Dienstag</td>
                                <td>8:00 - 20:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Mittwoch</td>
                                <td>8:00 - 20:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Donnerstag</td>
                                <td>8:00 - 20:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Freitag</td>
                                <td>9:00 - 18:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Samstag</td>
                                <td>9:00 - 14:00 Uhr</td>
                            </tr>
                            <tr>
                                <td>Sonntag</td>
                                <td>---</td>
                            </tr>
                        </table>
                        </div>
                        <div id="contact" class="col-md-4 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto">
                            <table class="text-start">
                                <tr>
                                    <td>Hauptsitz</td>
                                    <td><a href="https://www.google.de/maps/place/Frankfurt+(Main)+Hauptbahnhof/@50.106529,8.6504486,14z/data=!4m8!1m2!2m1!1shbf!3m4!1s0x47bd0bfe3791b2f9:0x4366c932973aafac!8m2!3d50.106529!4d8.6621618" target="_blank" class="whiteLink">irgendwasstrasse Ffm 60606 <i class="fas fa-map-marker-alt text-white mr-4"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Telefon</td>
                                    <td>069 8493243</td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td><a href="mailto:irgendwas@info.de" class="whiteLink">irgendwas@info.de</a></td>
                                </tr>
                                <tr>
                                    <td>Bewerbung</td>
                                    <td><a href="mailto:irgendwas-karriere@info.de" class="whiteLink">irgendwas-karriere@info.de</a></td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><a href="https://github.com/tsunami010904/pizza_fantastico.github.io" target="_blank" class="whiteLink">Gehe zu GiHub</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="copyright" class="footer-copyright text-center text-white py-3">
                    <p>&copy; Tsunami, jgeschaftlich, salnhan</p>
                </div>
            </footer>

        </div>
        <!-- JavaScript -->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!-- Custom js -->
        <script src="javaScript/main.js"></script>
    </body>
</html>';

function buildDishes(array $dishes): string 
{
    $template = '<tr class="meal">
    <td rowspan="3" width="300px" class="py-2"><div class="mealItem mx-auto"><div class="mealImages" style="background-image: url(%2$s)"></div></div></td>
    <td class="name">%1$s</td>
    <td class="size size1">26cm</td>
    <td class="price">%4$s</td>
</tr>
<tr>
    <td rowspan="2" class="ingredients">%3$s</td>
    <td class="size size2">32cm</td>
    <td class="price">%5$s</td>
</tr>
<tr>
    <td class="size size3">38cm</td>
    <td class="price">%6$s</td>
</tr>';

$result = '';
foreach($dishes as $tr) {    //Kommentar
    $result .= vsprintf($template, [ $tr[0], $tr[1], $tr[2], $tr[3],$tr[4],$tr[5]]);
} 
return $result;
}


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


