<?php

class Whiteboard{

    protected $WhiteboardID;
    protected $Content;
    protected $Date;
    protected $TeamID;

    public function __construct($WhiteboardID ,$Content ,$Date ,$TeamID)
    {
        $this->WhiteboardID = $WhiteboardID;
        $this->Content = $Content;
        $this->Date = $Date;
        $this->TeamID = $TeamID;
    }

    public function getWhiteboardID()
    {
        return $this->WhiteboardID;
    }

    public function setWhiteboardID($WhiteboardID)
    {
        $this->$WhiteboardID = $WhiteboardID;
    }

    public function getContent()
    {
        return $this->Content;
    }

    public function setContent($Content)
    {
        $this->$Content = $Content;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate($Date)
    {
        $this->$Date = $Date;
    }

    public function getTeamID()
    {
        return $this->TeamID;
    }

    public function setTeamID($TeamID)
    {
        $this->$TeamID = $TeamID;
    }

}