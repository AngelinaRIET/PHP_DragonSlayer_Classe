<?php


/*
 * Classe représentant tout type de monstre.
 * 
 * Elle n'est jamais directement instanciée, il s'agit d'une classe abstraite.
 * Une classe abstraite n'est pas entièrement implémentée, il faut passer par une
 * classe enfant qui sera plus concrète.
 */

abstract class Monster{

    public $name;
    public $pv;
    public $couleur;
    public $image;

    //constructeur qui se déclenche automatiquement a l'instanciation de la classe
    public function __construct($name, $pv, $couleur, $image)
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->couleur = $couleur;
        $this->image = $image;
    }

    public function presentation(){
        return 'Le monstre est un ' . $this->name . ' de couleur '.$this->couleur.' avec ' . $this->pv . ' points de vie';
    }
    
}