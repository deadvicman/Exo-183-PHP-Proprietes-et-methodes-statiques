<?php

class VOD {
    public $film = array('Die Hard', 'Avengers', 'La ligne verte','justice league', 'Highlander');
    public $tarif;
    public static $count = 0;

    public function setFilms($films) {
        $this->films = $films;
    }

    public function getFilms() {
        return $this->films;
    }

    public function setTarif($tarif) {
        $this->tarif = $tarif;
    }

    public function getTarif() {
        return $this->tarif;
    }

    public static function setNombreTotalAbonnes($counter_follow) {
        self::$count = $counter_follow;
    }

    public static function getNombreTotalAbonnes() {
        return self::$count;
    }

    public static function updateCounter($new_counter) {
        self::$count = $new_counter;
    }

    public static function checkCounter(){
        return self::$count;
    }
}
