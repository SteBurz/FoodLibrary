<?php

$_SESSION = array();

session_destroy();

if (!isset($_SESSION['user'])) {
    $result = ['status'         => 'success'];
} else {
    $result = ['status'         => 'failed'];
}

echo json_encode($result);