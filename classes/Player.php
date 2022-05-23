<?php

const TYPE_ANGEL   = 'ange';
const TYPE_FIGHTER = 'guerrier';
const TYPE_WIZARD  = 'magicien';


// Classe représentant un joueur humain
abstract class Player{

    public $name;
    public $type;
    public $pv;

    //constructeur qui se déclenche automatiquement à l'instanciation de la classe
    public function __construct($name, $type, $pv)
    {
        $this->name = $name;
        $this->type = $type;
        $this->pv = $pv;
    }

    //fonction qui retourne la phrase sans l'afficher
    public function presentation(){
        return 'Le joueur s\'appel ' . $this->name . ' il est est de type ' . $this->type . ' et il a ' . $this->pv . ' points de vie';
    }

    public function fatalAttack($dragon){
        //pv des dragons = à zero

        $dragon->pv = 0;
        return $this->name .' a lancé l\'attaque fatale sur '.$dragon->name.' (<span style="color:orange;">Fatality</span>)';

    }
}