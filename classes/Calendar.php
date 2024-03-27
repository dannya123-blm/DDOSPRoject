<?php

class dCalendar{

    protected $CalendarID;
    protected $Date;
    protected $TeamID;

    public function __construct($CalendarID,$Date,$TeamID)
    {
        $this->CalendarID = $CalendarID;
        $this->Date = $Date;
        $this->TeamID = $TeamID;
    }

    public function getCalendarID()
    {
        return $this->CalendarID;
    }

    public function setCalendarID($CalendarID)
    {
        $this->$CalendarID = $CalendarID;
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