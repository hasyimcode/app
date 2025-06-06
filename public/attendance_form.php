<?php
session_start();
require_once '../src/Database.php';
require_once '../src/models/User.php';
require_once '../src/models/Meeting.php';
require_once '../src/models/Attendance.php';
require_once '../src/controllers/AuthController.php';
require_once '../src/controllers/AttendanceController.php';
require_once '../src/helpers.php';

AuthController::requireLogin();
AttendanceController::handleRecord();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meeting_id = $_POST['meeting_id'];
} else {
    $meeting_id = $_GET['meeting_id'] ?? '';
}

view('attendance_form', ['meeting_id' => $meeting_id]);
