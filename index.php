<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pattes-Orphelines</title>
    <link rel="icon" href="img/paw-icon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="top" class="landing-page">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header navbar-right">
                <?php
                if(isset($_SESSION['isAdmin'])) {
                    ?>
                    <a class="navbar-brand" href="connexion.php">Se déconnecter</a>
                    <?php
                }
                else{

                    ?>
                    <a class="navbar-brand" href="connexion.php">Se connecter/S'inscrire</a>
                <?php } ?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Pattes-Orphelines</a></li>
                    <li><a href="referer.php?ref=achat">Boutique</a></li>
                    <li><a href="referer.php?ref=adopter">Animaux disponibles</a></li>
                    <?php
                    if(isset($_SESSION['isAdmin'])) {
                        if ($_SESSION['isAdmin'] == 1) {
                            ?>
                            <li><a href="administrateur.php">Administrateur</a>
                            </li>
                            <?php
                        }
                    }
                    ?>

                    <li><a href="referer.php?ref=panier">panier</a></li>
                    <li><a class="page-scroll" href="#contact">Nous contacter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
        <li data-target="#inSlider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Animal trouvé?<br/>
                        Venez nous le porter!<br/>
                        Nous allons nous en <br/>
                        occuper. <br/></h1>
                </div>
            </div>
            <img src="img/banner-cat.jpg" alt="laptop"/>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Vous chercher un nouvel <br/> ami? </h1>
                    <p>Le refuge animal est
                        le meilleur endroit!</p>
                    <p><a class="btn btn-lg btn-primary" href="adopter.php" role="button">En savoir plus</a></p>
                </div>
            </div>
            <img src="img/banner-dog.jpg" alt=chien"/>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Nourriture fait maison! <br/></h1>
                    <p>Venez découvrir notre norriture maison.</p>
                    <p><a class="btn btn-lg btn-primary" href="achat.php" role="button">En savoir plus</a></p>
                </div>
            </div>
            <img src="img/banner-rat.jpg" alt=chien"/>
        </div>
    </div>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>


<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-4">
            <h2>Achat</h2>
            <p>Choix parmi de nombreux accessoires et d'une grande variété de nourriture pour vos animaux</p>
        </div>
        <div class="col-sm-4">
            <h2>Adopter</h2>
            <p>De nombreux compagnons sont prêt à être adoptés.<br/>
            Ils sont enregistrés et vaccinés</p>
        </div>
        <div class="col-sm-4">
            <h2>Déposer</h2>
            <p>Donner votre animal à notre refuge afin de lui permettre de trouver une nouvelle maison.<br/>
            Son bonheur est garanti !</p>

        </div>
    </div>
</section>

<section id="team" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Notre équipe!</h1>
                <p>L'équipe de Pattes-Orphelines est composée de trois magnifiques employés</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="img/landing/avatar3.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Anthony Benoit-Caron</span> Employé</h4>
                    <p>Anthony est un joli garçon travaillant!</p>
                    <ul class="list-inline social-icon">
                        <li><a href="https://twitter.com/?lang=fr"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">

                    <h4><span class="navy">Mers</span> Président</h4>
                    <p>Mers est le suppérieur du refuge.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="https://twitter.com/?lang=fr"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="img/landing/avatar2.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Alexandre Venables</span> Employé</h4>
                    <p>Alexandre est une personne qui se surpasse tous les jours.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="https://twitter.com/?lang=fr"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p>L'équipe est très unie et est prête à passer au travers tous les épreuves</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="navy-section testimonials" style="margin-top: 0">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    Commentaire d'un client
                </h1>
                <div class="testimonials-text">
                    <i>"J'ai adopter un chien ici l'année passée! C'est un refuge formidable!!."</i>
                </div>
                <small>
                    <strong>12.02.2016 - Yvan Morissey</strong>
                </small>
            </div>
        </div>
    </div>
</section>

<footer>
    <?php
        include('nousContacter.php');
    ?>
</footer>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>

<script>
    $(document).ready(function () {

    $('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 80
    });

    // Page scrolling feature
    $('a.page-scroll').bind('click', function(event) {
    var link = $(this);
    $('html, body').stop().animate({
    scrollTop: $(link.attr('href')).offset().top - 50
    }, 500);
    event.preventDefault();
    $("#navbar").collapse('hide');
    });
    });

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();
</script>

</body>
</html>
