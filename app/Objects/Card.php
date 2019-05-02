<?php

namespace App\Objects;

class Card
{
    public $name;
    public $hp;
    public $def;
    public $minDam;
    public $maxDam;
    public $type;
    public $visualSRC;

    public function __construct($name = "unknow", $hp = 0, $def = 0, $minDam = 0, $maxDam = 0, $visualSRC = 'question'){
        $this->name = $name;
        $this->hp = $hp;
        $this->def = $def;
        $this->minDam = $minDam;
        $this->maxDam = $maxDam;
        $this->visualSRC = $visualSRC;

        return $this;
    }

    static public function make($card){
        return new Card($card['name'],
                        $card['hp'],
                        $card['def'],
                        $card['min-dam'],
                        $card['max-dam']);
                        //$card['visualSRC']);
    }
}
