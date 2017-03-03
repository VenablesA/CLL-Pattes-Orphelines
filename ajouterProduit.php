<?php
session_start();
$alert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    include("connexionBD.php");


    $stmt = $pdo->prepare("INSERT INTO Produit(nom,prix,description,categorie,image)
            values (?,?,?,?,?)");
    $stmt->bindParam(1, $_POST['nom']);
    $stmt->bindParam(2,  $_POST['prix']);
    $stmt->bindParam(3, $_POST['description']);
    $stmt->bindParam(4,  $_POST['categorie']);
    $stmt->bindParam(5, $_FILES['imgProduit']['name']);
    $stmt->execute();
    $alert = true;
    //$url = "http://205.236.12.52/projet/h2017/equipe1/connexion.php?id=1";
    //header('Location: '.$url);

    $dir = "/var/mers/html/projet/h2017/equipe1/img/produit/";
    //si le fichier existe
    if (isset($_FILES["imgProduit"])){
        echo "Upload du fichier ". $_FILES["imgProduit"]["name"] . " en cours...<P>";
        echo $_FILES['imgProduit']["tmp_name"];
    }
    if ( move_uploaded_file($_FILES['imgProduit']["tmp_name"],$dir . $_FILES["imgProduit"]["name"])){
        echo "Transmission réussis!!!<BR><P>";
        echo "Code d'erreur=".$_FILES["imgProduit"]["error"];
    }
    else {
        echo "Transmission non-réussis !@%*&**¾*$!<P>";
        echo "Code d'erreur=".$_FILES["imgProduit"]["error"];
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
            <h1>Ajout produit </h1>
        </div>
        <div class="ibox-content">
            <div class="row">
                <?php if($alert) {?>
                    <div class="alert alert-success">
                        Ajout Réussi !
                    </div>
                <?php } ?>

                <div class="col-sm-12"><h3 class="m-t-none m-b">Information du produit</h3><hr>
                    <p></p>
                    <form role="form" method="post"  enctype="multipart/form-data">

                    <div class="form-group"><label>Nom : </label> <input type="text" placeholder="Nom du produit" class="form-control" REQUIRED name="nom"></div>

                        <div class="form-group"><label class="control-label">Catégorie:</label>

                            <div class="form-group"><select class="form-control m-b" name="categorie">
                                    <option>Nouriture</option>
                                    <option>Jouet</option>
                                    <option>Accessoire</option>
                                    <option>Autres</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label>Prix demandé : </label><div class="input-group m-b"><span class="input-group-addon">$</span> <input type="number" class="form-control" required name="prix" placeholder="Prix"></div></div>
                        <div class="form-group"><label>Description : </label> <input type="text" placeholder="Description" class="form-control" required name="description"></div>
                        <div class="form-group"><label>Photo : </label>
                            <input name="imgProduit" type="file" accept="image/*" required />
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
