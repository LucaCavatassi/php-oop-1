<?php
class Actor {
    public string $name;
    public string $role;

    public function __construct (string $name, string $role ){
        $this->name = $name;
        $this->role = $role;
    }
};