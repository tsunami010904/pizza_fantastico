<?php

include_once 'repository.php';

$sliderRepository = new SliderRepository;

// get the array for the slider in the big slider section
$sliderRepository->setCsvFile('csv/bigSlider.csv');
$bigSlider = $sliderRepository->readCsvFile();

// get the array for the slider in the about us section
$sliderRepository->setCsvFile('csv/mySlider.csv');
$aboutUsSlider = $sliderRepository->readCsvFile();

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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 fixed-top" aria-label="Ninth navbar example">
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
                                    <li><a class="dropdown-item" href="bestellen.html#PizzaBestellen">Aus der Speisekarte</a></li>
                                    <li><a class="dropdown-item" href="bestellen.html#eigene_Pizza_zusammenstellen">Eigene Kreation</a></li>
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
                        <div id="bigSliderCarousel" class="carousel slide " data-bs-ride="carousel">
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
                                        <div class="carousel-caption text-start">
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
                            <img src="images/meals/start.jpg" alt="oven" class="iconPictures">
                    
                            <h2>Seit 1872</h2>
                            <p>Über Generationen sind traditionelle Rezepte entstanden. Unsere Pizzen werden noch heute in Steinöfen gebacken.</p>
                            <p><a class="btn btn-secondary" href="#" role="button">Über uns »</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4 text-center">
                           <img src="images/meals/start.jpg" alt="virus" class="iconPictures">
                    
                            <h2>Covid-19</h2>
                            <p>Wegen der Corona-Pandemie ist es leider nicht möglich, vor Ort zu essen. Ihre Bestellung wird in unseren Restaurants zur Abholung oder zur Lieferung zubereitet.</p>
                            <p><a class="btn btn-secondary" href="#openingHours" role="button">Unsere Öffnungszeiten »</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4 text-center">
                            <img src="images/meals/start.jpg" alt="cook" class="iconPictures">
                    
                            <h2>Auf Jobsuche?</h2>
                            <p>Beginnen Sie Ihre Karriere bei Pizza Fantastico! Abwechslungsreiche Tätigkeiten, flexible Arbeitszeiten und freundliche Kollegen warten auf Sie! </p>
                            <p><a class="btn btn-secondary" href="#" role="button">Ihre Möglichkeiten »</a></p>
                      </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->

                    <hr>
                
                </div>

                <!-- about us section -->
                <section id="aboutUs">
                    <div class="container">                    
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static pizzaBackground">
                                <strong class="d-inline-block mb-2 text-primary">Über uns</strong>
                                <h3 class="mb-0">Über uns</h3>
                                <div class="mb-1 text-muted">Nov 12</div>
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
                                            <div class="myBackgroundImages" style="background-image: url(' . $slide[3] . ')"></div>  
                                            <div class="container">
                                                <div class="carousel-caption text-start">
                                                    <h1>' . $slide[0] . '</h1>
                                                    <p>' . $slide[1] . '</p>
                                                    <p><a class="btn btn-lg btn-primary" href="' . $slide[4] . '" role="button">' . $slide[2] . '</a></p>
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
            </div>

            <!--Please insert your career-code here-->

            <!--footer start-->
            <footer class="page-footer bg-dark" id="footer">
                <div class="bg-success h2">
                    <div class="container">
                        <div class="row py-4 d-flex align-items-center">
                            <div class="col-md-12 text-center">
                                <a href="#"><i class="fab fa-facebook-square text-white mr-4"></i></a>
                                <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                                <a href="https://tsunami010904.github.io/pizza_fantastico.github.io/" target="_blank"><i class="fab fa-github text-white mr-4"></i></a>
                                <a href="#"><i class="fab fa-youtube text-white mr-4"></i></a>
                                <a href="#"><i class="fab fa-paypal text-white mr-4"></i></a>
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
                            <table>
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