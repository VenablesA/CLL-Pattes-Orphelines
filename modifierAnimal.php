<?php
session_start();
?>
<html lang="en">
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
            <h1>Modification de L'animal </h1>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-12"><h3 class="m-t-none m-b">Information de l'animal</h3><hr>
                    <p></p>
                    <form role="form" ACTION="">
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
                        <div class="form-group"><label>Nom : </label> <input type="text" placeholder="Nom de l'animal" class="form-control" REQUIRED></div>
                        <div class="form-group"><label>Âge: </label> <input type="number" placeholder="Âge" class="form-control" min="1" max="99" REQUIRED></div>
                        <div class="form-group"><label class="control-label">Sexe:</label>
                            <div class="form-group"><select class="form-control m-b" name="sexe">
                                    <option>Mâle</option>
                                    <option>Femelle</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label>Race : </label> <input type="text" placeholder="Race (optionnel)" class="form-control"></div>
                        <div class="form-group"><label>Prix demandé : </label><div class="input-group m-b"><span class="input-group-addon">$</span> <input type="number" class="form-control" required placeholder="Prix"></div></div>
                        <div class="form-group"><label>Description : </label> <input type="text" placeholder="Description" class="form-control" required></div>
                        <div class="form-group"><label>Photo : </label>
                            <input name="file" type="file" required />
                        </div>
                    </form>
                </div>

                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Ajouter</strong></button>
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
