<div class="wrapper wrapper-content animated fadeInRight" style="width:100%;">
    <center>
        <h1>Animaux disponibles à l'adoption</h1>
    </center>

    <div class="row">
        <div style="float:left;width: 20%;">
            <div style="margin-left: 50px;"> MENU RECHERCHE</div>
        </div>
        <div style="float:right;width:80%">
            <?php
            include("connexionBD.php");
            $sql =  'SELECT * FROM Animal';
            foreach  ($pdo->query($sql) as $row) {
                ?>
                <div class="col-md-5">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-images" style="height:450px;">
                                <br>
                                <?php
                                $image = $row['image'];
                                $id = $row['id'];
                                echo "<a href='referer.php?ref=animal&id=$id'><img src='img/animal/$image' alt='animal' style='width: 100%; height: 100%;'/></a>";
                                ?>
                            </div>
                            <div class="product-desc">
                            <span class="product-price">
                                <?php
                                echo $row['prix']. '$';
                                ?>
                            </span>
                                <small class="text-muted"><?php echo $row['categorie']; ?></small>
                                <a href="referer.php?ref=animal&id=<?php echo $id; ?>" class="product-name"><?php echo $row['nom']; ?></a>
                                <div class="m-t text-right">
                                    <a href="referer.php?ref=animal&id=<?php echo $id; ?>" class="btn btn-xs btn-outline btn-primary">Informations <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
