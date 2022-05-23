<?php
// Chargement des classes dépendantes
require_once './classes/Game.php';

// A-t'on reçu un formulaire ?
if(empty($_POST) == true) {
    // Non, affichage du menu du jeu (formulaire start)
    require 'templates/menu.phtml';
}
else {

    $data = $_POST;
    
    // Oui, exécution du jeu
    $game = new Game($data['difficulty'], $data['player-name'], $data['player-type']);

    // Création du jeu avec les données du formulaire

    // Exécution du jeu, récupération de la liste des messages
    $game->startGame();

    // Récupération de l'image du vainqueur

    require 'templates/game-start.phtml';
}