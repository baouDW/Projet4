<?php
require('controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'suppr') {
        delete();
    }
    elseif ($_GET['action'] == 'comm') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            posts();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }


    elseif ($_GET['action'] == 'modif') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            update();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'insertPost') {
        if (isset($_POST['titre'])) {
            insertP();
        }
        else {
            echo 'Erreur : aucun titre envoyé';
        }
    }

    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

}
else {
    listPosts();
}