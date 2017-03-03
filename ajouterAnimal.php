<?php
$alert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    include("connexionBD.php");


    $stmt = $pdo->prepare("INSERT INTO Animal(nom,age,categorie,image,description,race,sexe,prix)
            values (?,?,?,?,?,?,?,?);");
    $stmt->bindParam(1, $_POST['nom']);
    $stmt->bindParam(2,  $_POST['age']);
    $stmt->bindParam(3, $_POST['type']);
    $stmt->bindParam(4, $_FILES["file"]["name"]);
    $stmt->bindParam(5, $_POST['description']);
    $stmt->bindParam(6,$_POST['race']);
    $stmt->bindParam(7, $_POST['sexe']);
    $stmt->bindParam(8, $_POST['prix']);
    $stmt->execute();
    $alert = true;
        //$url = "http://205.236.12.52/projet/h2017/equipe1/connexion.php?id=1";
        //header('Location: '.$url);

    $dir = "/var/mers/html/projet/h2017/equipe1/img/animal/";
    //si le fichier existe
    if (isset($_FILES["file"])){

    }
    if ( move_uploaded_file($_FILES['file']["tmp_name"],$dir . $_FILES["file"]["name"])){
    }


}
?>
<html lang="fr">
<head>
    <link href="css/datapicker/datepicker3.css" rel="stylesheet">

</head>
<body id="top" class="landing-page">
<header>
    <?php
    include('menu.php');
    ?>
</header>
<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="ibox float-e-margins" style="margin-top: 100px">
        <div class="ibox-title">
            <h1>Ajout animal </h1>
        </div>
        <div class="ibox-content">
            <div class="row">
                <?php if($alert) {?>
                    <div class="alert alert-success">
                       Ajout Réussi !
                    </div>
                <?php } ?>

                <div class="col-sm-12"><h3 class="m-t-none m-b">Information de l'animal</h3><hr>
                    <p></p>
                    <form role="form"id="form" method="post" enctype="multipart/form-data">
                        <div class="form-group"><label class="control-label">Type:</label>

                            <div class="form-group"><select class="form-control m-b" name="type">
                                    <option>Chien</option>
                                    <option>Chat</option>
                                    <option>Lapin</option>
                                    <option>Reptile</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label>Nom : </label> <input type="text" placeholder="Nom de l'animal" class="form-control" REQUIRED name="nom"></div>
                        <div class="form-group"><label>Âge: </label> <input type="number" placeholder="Âge" class="form-control" min="1" max="99" REQUIRED name="age"></div>
                        <div class="form-group"><label class="control-label">Sexe:</label>
                            <div class="form-group"><select class="form-control m-b" name="sexe">
                                    <option>Mâle</option>
                                    <option>Femelle</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label>Race : </label> <input type="text" placeholder="Race (optionnel)" class="form-control" name="race"></div>
                        <div class="form-group"><label>Prix demandé : </label><div class="input-group m-b"><span class="input-group-addon">$</span> <input type="number" class="form-control" required placeholder="Prix" name="prix"></div></div>
                        <div class="form-group"><label>Description : </label> <input type="text" placeholder="Description" class="form-control" required name="description"></div>
                        <div class="form-group"><label>Photo : </label>
                                <input name="file" type="file" accept="image/*" required />
                        </div>
                </div>

                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Ajouter</strong></button>
                </form>
            </div>
        </div>

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

<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!--<script src="js/jquery-2.1.1.js"></script>-->
<script>
    $(document).ready(function () {
        $('#date').datepicker({
            language: "fr";
    })

    }
</script>

</html>
