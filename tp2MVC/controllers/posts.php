<?php

require_once('models/posts.php');


/** Doit contenir les méthodes pour  traiter les postes
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */


function getPostsListController()
{
    $req = getPosts(); // Appel au modèle
    require('views/posts.php');
}