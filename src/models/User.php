<?php
class User
{
    public static function findByUsername($username)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
