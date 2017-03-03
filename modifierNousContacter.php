<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$nomfichier = 'nousContacter.txt';
echo $nomfichier;
$letout=$_POST['textee'];
$fp = fopen($nomfichier,"w");
fputs($fp, $letout);
fclose($fp);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src='tinymce/js/tinymce/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            theme: 'modern',
            width: 1025,
            height: 500,
            toolbar: 'undo redo | styleselect | bold italic | link image',
        });
    </script>
</head>
<body class="top-landing">
<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="ibox float-e-margins" style="margin-top: 100px">
        <div class="ibox-title">
            <h1>Modification </h1>
        </div>
        <for class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post"  enctype="multipart/form-data">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content no-padding">
                                <textarea id="mytextarea" name="textee"><?php include 'nousContacter.txt'
                                    ?></textarea>
                            </div>
                        </div>
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Sauvegarder</strong></button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
