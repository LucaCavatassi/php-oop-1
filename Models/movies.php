<?php


class Movie {
    public string $name;
    public int $duration;
    public string $director;
    public string $writer;
    public Genre $genre;


    public function __construct(string $name, string $director, string $writer, Genre $genre)
    {
        $this->name = $name;
        $this->director = $director;
        $this->writer = $writer;
        $this->genre = $genre;
    }

    public function setDuration (int $duration) {
        if ($duration < 0) {
            throw new Exception("La lunghezza deve essere maggiore di 0min");
        }
        $this->duration = $duration;
    }

    public function getDuration() {
        return $this->duration . "min";
    }

};
