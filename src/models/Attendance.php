<?php
class Attendance
{
    public static function record($meetingId, $userId, $status)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('INSERT INTO attendance(meeting_id, user_id, status, timestamp) VALUES(?,?,?,NOW())');
        $stmt->execute([$meetingId, $userId, $status]);
    }

    public static function byMeeting($meetingId)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare('SELECT u.name, a.status, a.timestamp FROM attendance a JOIN users u ON a.user_id = u.id WHERE a.meeting_id = ?');
        $stmt->execute([$meetingId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
