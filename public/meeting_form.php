<?php
session_start();
require_once '../src/Database.php';
require_once '../src/models/User.php';
require_once '../src/models/Meeting.php';
require_once '../src/controllers/AuthController.php';
require_once '../src/controllers/MeetingController.php';
require_once '../src/helpers.php';

AuthController::requireLogin();
MeetingController::handleCreate();

view('meeting_form');
