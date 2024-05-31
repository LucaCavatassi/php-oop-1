<?php
class Genre {
    public string $genre_name;

    public function __construct (string $genre_name){
        $this->genre_name = $genre_name;
    }
};