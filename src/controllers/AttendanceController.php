<?php
class AttendanceController
{
    public static function handleRecord()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['user']['id'];
            Attendance::record($_POST['meeting_id'], $userId, $_POST['status']);
            header('Location: dashboard.php');
            exit;
        }
    }
}
