<?php
class UserModel {
    private $users = [];

    public function __construct() {
        // Load existing users (in a real application, this should be from a database)
        $this->users = [
            ['username' => 'admin', 'password' => 'password123'],
        ];
    }

    public function authenticate($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }

    public function register($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                return false; // Username already exists
            }
        }
        $this->users[] = ['username' => $username, 'password' => $password];
        return true;
    }
}
