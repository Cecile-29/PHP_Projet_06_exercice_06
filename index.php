<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet06 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet05 Exercice06</h1>
            <h2 class="col-12 text-info text-center">Créez un formulaire avec les champs "civilité", "nom" et "prénom" 
            ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoi du formulaire sur la même page, 
            affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. 
            Empêchez l'affichage de balises html. Le fichier envoyé doit être un pdf.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php


            ?> 
        </div>
        
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo4</title>
    </head>
    <body>
            <?php
            if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
                ?>
            <form method="post" action="index.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom" required>
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom" required>
                <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php
        } else {
            if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['civilite'])) {
                echo strip_tags('Bonjour ' . ' '. $_POST['civilite']. ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' !');
            }
        }
        ?> 
</body>
</html>