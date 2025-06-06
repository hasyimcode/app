<?php
class MeetingController
{
    public static function handleCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Meeting::create($_POST);
            header('Location: dashboard.php');
            exit;
        }
    }
}
