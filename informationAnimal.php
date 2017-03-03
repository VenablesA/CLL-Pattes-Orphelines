<?php
include("connexionBD.php");
    $id = $_GET['id'];
    $statement = $pdo->query("SELECT * FROM Animal where id=$id");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
?>
<div class="wrapper wrapper-content animated fadeInRight" style="width:100%;>
    <div class="row">
        <div class="col-lg-12">

            <div class="ibox product-detail">
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-images">
                                <div>
                                    <div class="image-imitation" style="height: 560px">
                                        <?php
                                        $image = $row['image'];
                                        echo "<img src='img/animal/$image' alt='animal' style='width: 100%; height: 100%;'/>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <h2 class="font-bold m-b-xs">
                                <?php
                                echo $row['nom'];
                                ?>
                            </h2>
                            <br>
                            <h3>Prix</h3>

                            <div class="small text-muted">
                                <?php echo $row['prix']. " $"; ?>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <h4>Description de l'animal</h4>

                            <div class="small text-muted">
                                <?php
                                echo $row['description'];
                                ?>

                                <br/>
                                <br/>
                            </div>
                            <dl class="small m-t-md">
                                <dt>Type</dt>
                                <dd><?php
                                    echo $row['categorie'];
                                    ?></dd>
                                <dt>Âge</dt>
                                <dd><?php
                                    echo $row['age']. " ans";
                                    ?></dd>
                                <dt>Sexe</dt>
                                <dd><?php
                                    echo $row['sexe'];
                                    ?></dd>

                                <?php
                                    $race = $row['race'];
                                    if ($race)
                                {
                                ?>
                                <dt>Race</dt>
                                <dd>
                                    <?php
                                    echo $row['race'];
                                    echo "</dd>";
                                    }
                                    ?>
                            </dl>
                            <hr>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

