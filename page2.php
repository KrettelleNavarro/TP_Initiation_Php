<?php
// Initialisation de la session
    // session_start();
    // test de var_dump
    // var_dump($_SESSION);
    $texteDuBouton = $_REQUEST["texteDuBouton"];
    $totalCommande = $_REQUEST["totalCommande"];
    // var_dump($texteDuBouton);
    // var_dump($totalCommande);
    // die("Ici");
    // echo $texteDuBouton;

    $totalCommande = ($totalCommande + 2);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial&display=swap" />
    <link rel="stylesheet" href="/component/css/mesCssPerso.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title> Page 2</title>
</head>

<body>

  <p><strong>Page 2</strong></p>

  <div class="col">
        <div class="row justify-content-between" id="logoConnexion">
          <div class="connexion" id="connect">

          <a href="index.php"><button type="button" class="btn btn-success btn-lg" onClick="window.location.href=''"><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;<?php echo $texteDuBouton; ?></button></a>
          </div>
        </div>
    </div>

</body>
</html>

<?php

echo $totalCommande;