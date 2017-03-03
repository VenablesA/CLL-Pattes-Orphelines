<?php
    session_start();
    if(isset($_GET['ref']))
        $ref = $_GET['ref'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pattes-Orphelines</title>
    <link rel="icon" href="img/paw-icon.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="top-navigation">

<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <i class="fa fa-reorder"></i>
                    </button>
                    <a href="index.php" class="navbar-brand">Pattes-Orphelines</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="referer.php?ref=achat"> Boutique</a>
                        </li>
                        <li>
                            <a href="referer.php?ref=adopter"> Animaux disponibles</a>
                        </li>
                        <?php
                        if(isset($_SESSION['isAdmin'])) {
                                ?>
                        <li>
                            <a href="referer.php?ref=panier"> Panier</a>
                        </li>
                            <?php
                                if ($_SESSION['isAdmin'] == 1) {
                            ?>
                        <li>
                            <a href="administrateur.php"> Administrateur</a>
                        </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <?php
                        if(isset($_SESSION['isAdmin'])) {
                        if ($_SESSION['isAdmin'] == 1) {
                        ?>
                        <li>
                            <a href="referer.php?ref=connexion">
                                <i class="fa fa-sign-out"></i> Se déconnecter
                            </a>
                        </li>
                        <?php }} else{
                            ?>
                            <li>
                                <a href="referer.php?ref=connexion">
                                    <i class="fa fa-sign-in"></i> Se connecter / S'inscrire
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="wrapper wrapper-content">
        <?php
        if(isset($ref)) {
            if ($ref == "connexion") {
                include("connexion.php");
            }
            elseif ($ref == "achat"){
                include "achat.php";
            }
            elseif ($ref == "adopter"){
                include "adopter.php";
            }
            elseif ($ref == "panier"){
                include "panier.php";
            }elseif ($ref == "produit"){
                if(isset($_GET['id'])){
                    include "informationProduit.php";
                }
                else
                    $aa = aa;
                    //error page not found
            }elseif ($ref == "animal"){
                if(isset($_GET['id'])){
                    include "informationAnimal.php";
                }
                else
                    $aa = aa;
                //error page not found
            }
        }
        ?>
        </div>

<!--        <div class="wrapper wrapper-content">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="ibox float-e-margins">-->
<!--                            <div class="ibox-title">-->
<!--                                <span class="label label-success pull-right">Monthly</span>-->
<!--                                <h5>Views</h5>-->
<!--                            </div>-->
<!--                            <div class="ibox-content">-->
<!--                                <h1 class="no-margins">386,200</h1>-->
<!--                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>-->
<!--                                <small>Total views</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="footer">
            <div class="pull-right">
                Anthony Benoit Caron --- Alexandre Venables
            </div>
            <div>
                <strong>Copyright</strong> Pattes-Orphelines &copy; 2017
            </div>
        </div>
</div>
</div>



<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>



</body>

</html>
