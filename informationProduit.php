<?php
    include("connexionBD.php");
    $id = $_GET['id'];
    $statement = $pdo->query("SELECT * FROM Produit where id=$id");
    $row = $statement->fetch(PDO::FETCH_ASSOC);

?>
<div class="wrapper wrapper-content animated fadeInRight" style="width:100%;">

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
                                        echo "<img src='img/produit/$image' alt='produit' style='width: 100%; height: 100%;'/>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <h2 class="font-bold m-b-xs">
                                <?php echo $row['nom']; ?>
                            </h2>
                            <br>

                            <h3>Prix</h3>

                            <div class="small text-muted">
                                <?php echo $row['prix']. " $"; ?>
                            </div>
                            <hr>

                            <h4>Description du produit</h4>

                            <div class="small text-muted">
                                <?php echo $row['description']; ?>

                                <br/>
                                <br/>
                            </div>
                            <dl class="small m-t-md">
                                <dt>Catégorie</dt>
                                <dd><?php echo $row['categorie']; ?></dd>
                            </dl>
                            <hr>

                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Ajouter au panier</button>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

