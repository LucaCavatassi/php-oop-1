<?php
require_once "Models/actor.php";
class Movie {
    public string $name;
    private int $duration;
    private string $director;
    private string $writer;
    public Genre $genre;
    public array $cast;
    
    public function __construct(string $name, Genre $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    // CAST
    public function setCast (string $name, string $role){
        $actor = new Actor($name, $role);
        $this->cast[] = $actor;
    }


    // DURATION
    public function setDuration (int $duration) {
        if ($duration < 0) {
            throw new Exception("La lunghezza deve essere maggiore di 0min");
        }
        $this->duration = $duration;
    }
    public function getDuration() {
        return $this->duration . "min";
    }

    // DIRECTOR
    public function setDirector (string $director){
        $this->director = $director;
    }

    public function getDirector() {
        return "Directed by " . $this->director;
    }
    //WRITER
    public function setWriter (string $writer){
        $this->writer = $writer;
    }

    public function getWriter() {
        return "Written by " . $this->writer;
    }
};
