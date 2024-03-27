<?php

class User{
    protected $UserID;
    protected $Username;
    protected $PasswordHash;
    protected $Email;

    public function __construct($UserID, $Username, $PasswordHash, $Email) {
        $this->UserID = $UserID;
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->Email = $Email;
    }
    public function getUserID() {
        return $this->UserID;
    }

    public function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    public function getUsername() {
        return $this->Username;
    }

    public function setUsername($Username) {
        $this->Username = $Username;
    }

    public function getPasswordHash() {
        return $this->PasswordHash;
    }

    public function setPasswordHash($PasswordHash) {
        $this->PasswordHash = $PasswordHash;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

}