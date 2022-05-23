<?php

require_once 'Player.php';

class Warrior extends Player {

    public function specificAttack($dragon){
        $dragon->pv -= rand(20, 30);
        return 'Le Guerrier a lancé son attaque spéciale (<span style="color:orange;">Lame de feu</span>)';
    }
    
}