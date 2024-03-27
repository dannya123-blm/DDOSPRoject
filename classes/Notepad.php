<?php

class Notepad{

    protected $NotepadID;
    protected $Content;
    protected $WhiteboardID;

    public function __construct($NotepadID, $Content, $WhiteboardID)
    {
        $this->NotepadID = $NotepadID;
        $this->Content = $Content;
        $this->WhiteboardID = $WhiteboardID;
    }

    public function getNotepadID()
    {
        return $this->NotepadID;
    }

    public function setNotepadID($NotepadID)
    {
        $this->NotepadID = $NotepadID;
    }

    public function getContent()
    {
        return $this->Content;
    }

    public function setContent($Content)
    {
        $this->Content = $Content;
    }

    public function getWhiteboardID()
    {
        return $this->WhiteboardID;
    }

    public function setTeamID($WhiteboardID)
    {
        $this->Whiteboard = $WhiteboardID;
    }

}