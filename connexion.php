<?php
$alert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomUtil = $_POST['nomUtil'];
    $mdp = md5($_POST['mdp']);

    include("connexionBD.php");
    $stmt = $pdo->prepare("SELECT * FROM User where nomUtil = :nomUtil and mdp = :mdp");
    $stmt->execute(array(':nomUtil' => $nomUtil, ':mdp' => $mdp));
    if($stmt->fetchColumn())
    {
        $stmt->execute(array(':nomUtil' => $nomUtil, ':mdp' => $mdp));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['nomUtil'] = $nomUtil;
        $_SESSION['nom'] = $row['prenom'] . " ". $row['nom'];
        $_SESSION['isAdmin'] = $row['isAdmin'];
        echo $_SESSION['nomUtil'];
        echo $_SESSION['nom'];
        if (isset($_POST['souvenirMoi'])) {
            echo "setted";
            setcookie("nomUtil", $nomUtil, time() + 3600 * 24 * 30);
            setcookie("checked", true, time() + 3600 * 24 * 30);
        } elseif (isset($_COOKIE['nomUtil'])) {
            echo "notsetted";
//            unset($_COOKIE['nomUtil']);
//            unset($_COOKIE['checked']);
            setcookie("nomUtil", 0, time()-1);
            setcookie("checked", 0, time()-1);
        }
    }
    else{
        $alert = true;
    }
}
?>

    <div class="col-md-2"></div>
    <div class="col-md-8">
            <h1>S'authentifier</h1><hr>
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <?php
                    if (isset($_SERVER['HTTP_REFERER'])){
                    if($_SERVER['HTTP_REFERER']=="http://205.236.12.52/projet/h2017/equipe1/inscription.php" and $_GET["id"]==1){
                       ?>
                    <div class="alert alert-success">
                        Inscription réussie, vous pouvez maintenant vous connecter.
                    </div>
                     <?php }} ?>
                    <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Se connecter</h3>
                        <br>
                        <form role="form" action="referer.php?ref=connexion" method="POST">
                            <div class="form-group"><label>Nom d'utilisateur : </label> <input type="text" placeholder="Nom d'utilisateur" name="nomUtil" class="form-control" value="<?php if(isset($_COOKIE['checked']))if($_COOKIE['checked'] == true) echo $_COOKIE['nomUtil'];?>"></div>
                            <div class="form-group"><label>Mot de passe : </label> <input type="password" placeholder="Mot de passe" name="mdp" class="form-control"></div>
                            <div>
                                <?php if($alert) {?>
                                <div class="alert alert-danger">
                                    Le nom d'utilisateur ou le mot de passe est invalide.
                                </div>
                                <?php } ?>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Se connecter</strong></button>
                                <label> <input type="checkbox" class="i-checks" name="souvenirMoi" value="checked" <?php if(isset($_COOKIE['checked']))if($_COOKIE['checked'] == true) { ?>checked <?php } ?>> Se souvenir de moi </label>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6"><h4>Vous n'êtes pas membre</h4>
                        <p>Vous pouvez vous créer un compte</p>
                        <p class="text-center">
                            <a href="referer.php?ref=inscription"><i class="fa fa-sign-in big-icon"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>

