<?php

class Team{
    protected $TeamID;
    protected $TeamName;

    public function __construct($TeamID, $TeamName) {
        $this->TeamID = $TeamID;
        $this->TeamName = $TeamName;
    }
    public function getTeamID() {
        return $this->TeamID;
    }

    public function setTeamID($TeamID) {
        $this->$TeamID = $TeamID;
    }

    public function getTeamName() {
        return $this->TeamName;
    }

    public function setTeamName($TeamName) {
        $this->$TeamName = $TeamName;
    }

}