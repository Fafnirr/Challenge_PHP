<?php

require('User.php');

$user1 = new User('ryan@gmail.com', '112233', 'admin');
$user2 = new User('jack@gmail.com', '441166', 'visiteur');


session_start();


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="mainContainer">
        <div id="titleContainer">
            <h1 id="logedTitle">Connecté</h1>
            <h1><a href="disconnect.php"  name="logOut" id="logOut">Se deconnecter</a></h1>
        </div>
        <p id="geatings">Bonjour
            <?php if ($_SESSION['email'] == $user1->getEmail()) {
                echo 'bienvenue ' . $user1->getRole() . ' ' . $user1->getEmail();
            } ?>
        </p>
        <p id="secondGreating">Content de vous revoir: voici la liste de citations ou tu peut ajouter une nouvelle citation</p>
        <br>
        <input type="button" id="addCitation" value="Ajoute une citation !" data-toggle="modal" data-target="#modal">

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="modalText">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addACitation" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div id="container" class="row">
            <div class="card col-4 col">
                <h4 class="title">Citation 1</h4>
                <p id="para">Seul un idiot mesure la profondeur de l'eau ses deux pieds.</p>
                <input type="button" value="supprimer" class="del" id="del1">
            </div>
            <div class="card col-4 col">
                <h4 class="title">Citation 2</h4>
                <p id="para">Pour se réconcilier, on n'apporte pas un couteau qui tranche mais une aiguille qui coud.</p>
                <input type="button" value="supprimer" class="del" id="del2">
            </div>
            <div class="card col-4 col">
                <h4 class="title">Citation 3</h4>
                <p id="para">On ne peut pas labourer,semer,récolter et manger le même jour.</p>
                <input type="button" value="supprimer" class="del" id="del3">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>