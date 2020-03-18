<?php
    require '../functions/HandleFood.php';

    $data = new HandleFood();
    $manager = new Manager();
    $foodTableName = $data->getFoodTableName();
    $foodName = htmlspecialchars($_POST['foodName']);
    $foodAmount = htmlspecialchars($_POST['amount']);
    $foodAmountType = htmlspecialchars($_POST['amountType']);
    $foodBestBefore = htmlspecialchars($_POST['bestBefore']);
    $conn = $manager->connect();

    $stmt = $conn->prepare("INSERT INTO $foodTableName (foodName, amount, amountType, bestBefore) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('siss', $foodName, $foodAmount, $foodAmountType, $foodBestBefore);
    $stmt->execute();

    $result = ['status' => 'success'];

    $stmt->close();
    $conn->close();

    echo json_encode($result);
?>