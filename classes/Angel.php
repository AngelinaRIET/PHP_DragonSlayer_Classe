<?php

require_once 'Player.php';

class Angel extends Player {

    public function specificAttack($dragon){
        $dragon->pv -= rand(20, 30);
        return 'L\'ange a lancé son attaque spéciale (<span style="color:orange;">Flèche de lumière</span>)';
        
    }
    
}