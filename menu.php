<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!---->
    <title>Pattes-Orphelines</title>
    <link rel="icon" href="img/paw-icon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/maison.css" rel="stylesheet">
</head>
<body id="top" class="">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header navbar-right">
                    <?php
                        if(isset($_SESSION['isAdmin'])) {
                            ?>
                            <a class="navbar-brand" href="deconnexion.php">Se déconnecter</a>
                            <?php
                        }
                        else{

                            ?>
                            <a class="navbar-brand" href="connexion.php">Se connecter/S'inscrire</a>
                    <?php } ?>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="achat.php">Boutique</a></li>
                        <li><a href="adopter.php">Animaux disponibles</a></li>
                        <?php
                         if(isset($_SESSION['isAdmin'])) {
                             if ($_SESSION['isAdmin'] == 1) {
                                 ?>
                                 <li class="dropdown"><a href="administrateur.php">Administrateur</a>
                                 </li>
                                 <?php
                             }
                         }
                        ?>

                        <li><a href="panier.php">panier</a></li>
                        <li><a class="page-scroll" href="#contact">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
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
</script>

<?php
if ($page != 'index.php') {
    ?>

    <script>
        var cbpAnimatedHeader = (function() {
            var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
            function init() {
                    $(header).addClass('navbar-scroll');
                window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( scrollPage, 250 );
                    }
                }, false );
            }
            function scrollPage() {
                var sy = scrollY();
                didScroll = false;
            }
            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();

        })();
    </script>

    <?php
}
else
{
    ?>

    <script>
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

    <?php
}
?>
</html>














<!--        <div class="row border-bottom white-bg">-->
<!--            <nav class="navbar navbar-static-top" role="navigation">-->
<!--                <div class="navbar-header">-->
<!--                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">-->
<!--                        <i class="fa fa-reorder"></i>-->
<!--                    </button>-->
<!--                    <a href="#" class="navbar-brand">Inspinia</a>-->
<!--                </div>-->
<!--                <div class="navbar-collapse collapse" id="navbar">-->
<!--                    <div class="navbar-header navbar-right">-->
<!--                        --><?php
//                        if(isset($_SESSION['isAdmin'])) {
//                            ?>
<!--                            <a class="navbar-brand" href="deconnexion.php">Se déconnecter</a>-->
<!--                            --><?php
//                        }
//                        else{
//
//                            ?>
<!--                            <a class="navbar-brand" href="connexion.php">Se connecter/S'inscrire</a>-->
<!--                        --><?php //} ?>
<!--                    </div>-->
<!--                    <div id="navbar" class="navbar-collapse collapse">-->
<!--                        <ul class="nav navbar-nav navbar-left">-->
<!--                            <li><a href="index.php">Accueil</a></li>-->
<!--                            <li><a href="achat.php">Boutique</a></li>-->
<!--                            <li><a href="adopter.php">Animaux disponibles</a></li>-->
<!--                            --><?php
//                            if(isset($_SESSION['isAdmin'])) {
//                                if ($_SESSION['isAdmin'] == 1) {
//                                    ?>
<!--                                    <li class="dropdown"><a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Administrateur</a>-->
<!--                                        <ul role="menu" class="dropdown-menu">-->
<!--                                            <li><a href="ajouterAnimal.php">Ajouter animal</a></li>-->
<!--                                            <li><a href="listeProduit.php">ListeProduit</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    --><?php
//                                }
//                            }
//                            ?>
<!---->
<!--                            <li><a href="panier.php">panier</a></li>-->
<!--                            <li><a class="page-scroll" href="#contact">Nous contacter</a></li>-->
<!--                        </ul>-->
<!--                </div>-->
<!--            </nav>-->
<!--        </div>-->