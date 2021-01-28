<?php

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
        <!--Minh Thais links-->
        <link rel="stylesheet" href="css/style1.css">
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div id="page-wrapper">
            <!--Minh Thais navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 fixed-top" aria-label="Ninth navbar example">
                <div class="container-xl">
                  <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="Pizzeria Logo"/> Pizza Fantastico</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            
                  <div class="collapse navbar-collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="about_us.html">Über uns</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="ueber_uns.html">Über uns (alt)</a>
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
                                <a class="nav-link" href="#kontakt" tabindex="-1">Kontakt</a>
                            </li>
                        </ul>
                        <form>
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
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
                        original italianische <br />
                        Restaurant <br />
                    </p>
                    <p class="animated fadeInUp object-restaurant-description-2">am Frankfurt Hauptbahnhof</p>
                    <br/>
                    <br/>
                    <br/>
                    <p class="animated fadeInLeft object-restaurant-description-2">Herzlich Willkommen</p>
                </div>
                <a href="#about" class="more scrolly">Unsere Öffnungszeiten</a>
            </section>
            <!-- about section -->
            <section id="about_us">
                <div class="graySection">
                    <div class="container">
                        <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class=""></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="1" class="active"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="3" class=""></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="4" class=""></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="5" class=""></li>
                            </ol>
                    
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2016/09/07/19/54/wines-1652455__340.jpg)"></div>  
                                    <div class="container">
                                        <div class="carousel-caption text-start">
                                            <h1>Champangna</h1>
                                            <p>Besuchen Sie unsere Restaurants und genießen Sie Ihre Pizza mit einem Glas Champangna, sofern Covid-19 keine große Gefahr mehr darstellt.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Zur Menüauswahl</a></p>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="carousel-item active">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2017/06/06/22/37/italian-cuisine-2378729__340.jpg);"></div>
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <h1>Unser Qualitätsversprechen</h1>
                                            <p>All unsere Lebensmittel sind regional und hochwertig!</p>
                                            <p><a class="btn btn-lg btn-primary" href="speisekarte.html" role="button">Mehr Informationen</a></p>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="carousel-item">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2017/02/15/10/57/pizza-2068272__340.jpg);"></div>
                                    <div class="container">
                                        <div class="carousel-caption text-end">
                                            <h1>Unsere Pizzen</h1>
                                            <p>Alle unsere Pizzen sind von Hand gemacht und im Steinofen gebacken</p>
                                            <p><a class="btn btn-lg btn-primary" href="https://www.lieferando.de" target="_blank" role="button">Mehr Informationen</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2018/04/17/11/03/cocktail-3327242__340.jpg);"></div>
                                    <div class="container">
                                        <div class="carousel-caption text-end">
                                            <h1>Unsere Cocktails</h1>
                                            <p>Geniessen sie nach dem Feierabend einen frischen Cocktail</p>
                                            <p><a class="btn btn-lg btn-primary" href="https://www.lieferando.de" target="_blank" role="button">Besuche lieferando.de</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2017/08/10/04/49/restaurant-2618315__340.jpg);"></div>
                                    <div class="container">
                                        <div class="carousel-caption text-end">
                                            <h1>Lounge</h1>
                                            <p>Hier könnten sie ihre Pizza geniessen</p>
                                            <p><a class="btn btn-lg btn-primary" href="https://www.lieferando.de" target="_blank" role="button">Menüauswahl</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="myBackgroundImages" style="background-image: url(https://cdn.pixabay.com/photo/2015/06/08/15/29/chair-802098__340.jpg);"></div>
                                    <div class="container">
                                        <div class="carousel-caption text-end">
                                            <h1>Lounge</h1>
                                            <p>Hier könnten sie ihre Pizza geniessen</p>
                                            <p><a class="btn btn-lg btn-primary" href="https://www.lieferando.de" target="_blank" role="button">Besuche unsere Homepage</a></p>
                                        </div>
                                    </div>
                                </div>
                            
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="career">
                <!--Please insert your career-code here-->
            </section>
            <!--footer start-->
        
            <footer class="page-footer bg-dark" id="runter">
                <div class="bg-success size30">
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
                        <div class="col-md-4 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Unser Motto</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto footerHorizon">
                            <p class="mt-2 meineQuote"><i class="fas fa-quote-right"></i> In der Weihnachtsbäckerei, gibt es manche Leckerei, zwischen Mehl und Tomatensauce macht so mancher Knilch eine riesengroße Kleckerei, in der Weihnachtsbäckerei, in der Weihnachtsbäckerei ... <i class="fas fa-quote-left"></i></p>
                        </div>
                        <div class="col-md-6 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto footerHorizon">
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
                                    <td><a href="https://tsunami010904.github.io/pizza_fantastico.github.io/" target="_blank" class="whiteLink">Gehe zu GiHub</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">Das Team</h6>
                            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto footerHorizon">
                            <ul class="list-unstyled">
                                <li class="my-2">tsunami</li>
                                <li class="my-2">jgeschaftlich</li>
                                <li class="my-2">salnhan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
    
            <!--footer end-->
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