<?php
    /*phpinfo();
   
    $maVar1 = "Valeur de ma var 1";
    $maVar2 = "Valeur de ma var 2";
   
    echo $maVar1;*/

    $texteDuBouton = "Texte Bouton";

    $prenom = 'Krettelle';
    $nom = 'Navarro';
    $age = 42;

?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial&display=swap" />
    <link rel="stylesheet" href="/component/css/mesCssPerso.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Accueil</title>
</head>

<body>
    <p><strong>Page 1</strong></p>

    <div class="col">
        <div class="row justify-content-between" id="logoConnexion">
            <div class="connexion" id="connect">
                <a href="page2.php?texteDuBouton=valeurTest&totalCommande=22">
                    <button type="button" class="btn btn-success btn-lg" onClick="window.location.href=''">
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp; Aller à la page 2
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    <form method="POST" action ="">
        <input type="text" name = "Nom" placehoder Nom />
        <input type="text" name = "Prénom" placehoder Prénom />
        <input type="text" name = "Age" placehoder Age />
        <input type="submit" value="Envoyer!"/>
   
   
 
   
    </form>
    
</body>

</html>

<?php
  
