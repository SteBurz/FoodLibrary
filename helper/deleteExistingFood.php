<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../functions/HandleFood.php';

    $data = new HandleFood();
    $manager = new Manager();
    $foodTableName = $data->getFoodTableName();
    $foodName = htmlspecialchars($_POST['foodName']);
    $conn = $manager->connect();

    $stmt = $conn->prepare("DELETE FROM $foodTableName WHERE foodName = ?");
    $stmt->bind_param('s', $foodName);
    $stmt->execute();

    $result = ['status' => 'success'];

    $stmt->close();
    $conn->close();

    echo json_encode($result);
?>