<?php
session_start();
require_once '../src/Database.php';
require_once '../src/models/User.php';
require_once '../src/models/Meeting.php';
require_once '../src/models/Attendance.php';
require_once '../src/controllers/AuthController.php';
require_once '../src/helpers.php';

AuthController::requireLogin();
$meetingId = $_GET['meeting_id'] ?? 0;
$attendances = Attendance::byMeeting($meetingId);

view('report', ['attendances' => $attendances]);
