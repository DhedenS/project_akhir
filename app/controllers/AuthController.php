<?php
require_once '../app/models/UserModel.php';

class AuthController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['register'])) {
                $this->register();
            } else {
                $this->login();
            }
        } else {
            $this->showLoginForm();
        }
    }

    private function showLoginForm() {
        require '../app/views/login.php';
    }

    private function showRegisterForm() {
        require '../app/views/register.php';
    }

    private function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->model->authenticate($username, $password)) {
            $_SESSION['username'] = $username;
            header('Location: /mvc-login/app/views/dashboard.php');
            exit();
        } else {
            echo "Invalid credentials!";
            $this->showLoginForm();
        }
    }

    private function register() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->model->register($username, $password)) {
            echo "Registration successful! You can now log in.";
            $this->showLoginForm();
        } else {
            echo "Registration failed! Username already exists.";
            $this->showRegisterForm();
        }
    }
}
