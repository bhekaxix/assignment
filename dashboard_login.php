<?php
session_start();

class Dashboard {
    private $session;

    public function __construct($session) {
        $this->session = $session;
    }

    public function checkSession() {
        if (!isset($this->session['user_id'])) {
            header('Location: login.php');
            exit();
        }
    }

    public function displayWelcomeMessage() {
        echo "<h1>Welcome to the Dashboard!</h1>";
        echo "<p>You have successfully logged in.</p>";
    }
}

// Instantiate the Dashboard class and execute methods
$dashboard = new Dashboard($_SESSION);
$dashboard->checkSession();
$dashboard->displayWelcomeMessage();
