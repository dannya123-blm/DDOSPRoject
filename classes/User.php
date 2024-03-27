<?php

class User {
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

    // Method to save user data to the database
    public function saveToDatabase($pdo) {
        try {
            // Prepare SQL statement
            $stmt = $pdo->prepare("INSERT INTO users (UserID, Username, PasswordHash, Email) VALUES (?, ?, ?, ?)");

            // Bind parameters
            $stmt->bindParam(1, $this->UserID);
            $stmt->bindParam(2, $this->Username);
            $stmt->bindParam(3, $this->PasswordHash);
            $stmt->bindParam(4, $this->Email);

            // Execute the statement
            $stmt->execute();

            return true; // Successfully inserted
        } catch (PDOException $e) {
            // Handle exception
            return false; // Failed to insert
        }
    }
}
?>
