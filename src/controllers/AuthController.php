<?php
class AuthController
{
    public static function login($username, $password)
    {
        $user = User::findByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
            ];
            return true;
        }
        return false;
    }

    public static function requireLogin()
    {
        if (empty($_SESSION['user'])) {
            header('Location: login.php');
            exit;
        }
    }
}
