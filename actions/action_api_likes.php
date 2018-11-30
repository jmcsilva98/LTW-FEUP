<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');

header('Content-Type: application/json');
if (!isset($_SESSION['username']))
die(json_encode(array('error' => 'not_logged_in')));

header("Location:../pages/login.php");




?>