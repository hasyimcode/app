<?php
session_start();
require_once '../src/Database.php';
require_once '../src/models/User.php';
require_once '../src/models/Meeting.php';
require_once '../src/models/Attendance.php';
require_once '../src/controllers/AuthController.php';
require_once '../src/controllers/MeetingController.php';
require_once '../src/controllers/AttendanceController.php';
require_once '../src/helpers.php';

if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (AuthController::login($_POST['username'], $_POST['password'])) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Login gagal';
    }
}

view('login', ['error' => $error ?? null]);
