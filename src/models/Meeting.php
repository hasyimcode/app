<?php
class Meeting
{
    public static function all()
    {
        $pdo = Database::getInstance();
        return $pdo->query('SELECT * FROM meetings ORDER BY date DESC')->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('INSERT INTO meetings(title, agenda, date, start_time, end_time, location) VALUES(?,?,?,?,?,?)');
        $stmt->execute([
            $data['title'],
            $data['agenda'],
            $data['date'],
            $data['start_time'],
            $data['end_time'],
            $data['location'],
        ]);
    }
}
