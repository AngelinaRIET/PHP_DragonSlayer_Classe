<?php
require_once 'Monster.php';

class Dragon extends Monster{

    //constructeur qui se déclenche automatiquement a l'instanciation de la classe
    public function __construct($name, $pv, $couleur, $image)
    {
        //appel du constructeur de la classe mere
        parent::__construct($name, $pv, $couleur, $image);
    }

}