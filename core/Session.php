<?php

namespace App\core;

class Session {
    public function setSession(string $index,$data) {
        $_SESSION[$index] = $data;
    }

    public function getSession(string $index) {
        return $_SESSION[$index];
    }

    public function unsetSession(string $index) {
        unset($_SESSION[$index]);
    }
}