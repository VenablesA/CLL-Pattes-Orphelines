<?php
session_start();
?>
<?php
$alert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $date = date('Y-m-d');
    include("connexionBD.php");
    $statement = $pdo->prepare("SELECT nomUtil FROM User where nomUtil = :nomUtil");
    $statement->execute(array(':nomUtil' => $_POST['nomUtil']));

    if ($statement->fetchColumn()) {
        $alert = true;
    }
    else
    {
        $stmt = $pdo->prepare("INSERT INTO User(nomUtil,mdp,nom,prenom,dateNaissance,adresse,codePostal,ville,courriel,dateCreation)
              values (?,?,?,?,?,?,?,?,?,?);");
        $stmt->bindParam(1, $_POST['nomUtil']);
        $stmt->bindParam(2,  md5($_POST['mdp']));
        $stmt->bindParam(3, $_POST['nom']);
        $stmt->bindParam(4,  $_POST['prenom']);
        $stmt->bindParam(5, $_POST['dateNaissance']);
        $stmt->bindParam(6,$_POST['adresse']);
        $stmt->bindParam(7, $_POST['code']);
        $stmt->bindParam(8, $_POST['ville']);
        $stmt->bindParam(9, $_POST['email']);
        $stmt->bindParam(10, $date);
        $stmt->execute();
        $url = "http://205.236.12.52/projet/h2017/equipe1/connexion.php?id=1";
        header('Location: '.$url);
    }
}
?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


<!--    <link href="css/datapicker/datepicker3.css" rel="stylesheet">-->
</head>
<body id="top" class="landing-page">
<header>
    <?php
    include('menu.php');
    ?>
</header>

<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="ibox float-e-margins" style="margin-top: 60px">
        <div class="ibox-title">
            <h1>Inscription </h1>
        </div>
        <div class="ibox-content" id="validation">
            <div class="row">
                <form role="form"id="form" method="post">
                <div class="col-md-6">
                    <div class="col-sm-12"><h2 class="m-t-none m-b">Information de connexion</h2><hr>
                        <br>
                            <?php if($alert) {?>
                            <div class="alert alert-danger">
                                Ce nom d'utilisateur existe déja
                            </div>
                            <?php } ?>
                        <div class="form-group"><label>Nom d'utilisateur : </label> <input type="text" placeholder="Nom d'utilisateur" class="form-control"name="nomUtil"required minlength="5"></div>
                        <div class="form-group"><label>Mot de passe : </label> <input type="password" placeholder="Mot de passe" class="form-control"name="mdp"required minlength="6" id="mdp"> </div>
                        <div class="form-group"><label>Confirmation mot de passe : </label> <input type="password" placeholder="Réinscrire le mot de passe" class="form-control"name="confirmMdp" oninput="check(this)" required minlength="6"></div>
                        <script language='javascript' type='text/javascript'>
                            function check(input) {
                                if (input.value != document.getElementById('mdp').value) {
                                    input.setCustomValidity('Confirmation du mot de passe invalide');
                                } else {
                                    input.setCustomValidity('');
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-12"><h2 class="m-t-none m-b"> Identité</h2><hr>
                        <br>
                        <div class="form-group">
                            <label>Nom : </label>
                            <input type="text" placeholder="Nom" class="form-control"name="nom"required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>Prénom : </label>
                            <input type="text" placeholder="Prénom" class="form-control"name="prenom"required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>Date de naissance : </label>
                            <input type="text" class="form-control" id="dateNaissance" placeholder="Date de naissance"name="dateNaissance"required length="8">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12"><h2 class="m-t-none m-b">Coordonnées</h2><hr>
                    <br>
                        <div class="form-group"><label>Adresse : </label> <input type="text" placeholder="Adresse" class="form-control" name="adresse" required></div>
                        <div class="form-group"><label>Code postal : </label> <input type="text" placeholder="Code postal" class="form-control"name="code"required maxlength="7" pattern="[a-zA-z][0-9][a-zA-z] ?[0-9][a-zA-Z][0-9]" title="Le code postal doit être sous le format A1A 1A1"></div>
                        <div class="form-group"><label>Ville : </label> <input type="text" placeholder="Ville" class="form-control" name="ville" required></div>
                        <div class="form-group"><label>Téléphone : </label> <input type="text" placeholder="Téléphone" class="form-control"name="telephone"required maxlength="14" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" title="Le téléphone doit être sous le format (999) 999-9999"></div>
                        <div class="form-group"><label>Email : </label> <input type="email" placeholder="Email" class="form-control"name="email"></div>
                </div>
                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>S'inscrire</strong></button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php
    include('nousContacter.php');
    ?>
</footer>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- MENU -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<script>
    $(document).ready(function() {
        $('#dateNaissance').datepicker({
            language: 'fr',
            autoclose: true
        });
    })
</script>

</html>
