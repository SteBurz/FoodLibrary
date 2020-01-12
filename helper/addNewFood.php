<?php
    require '../functions/Manager.php';

    $manager = new Manager();
    $conn = $manager->connect();

    $stmt = $conn->prepare("INSERT INTO food (foodName, amount, amountType, bestBefore) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('siss',
        htmlspecialchars($_POST['foodName']),
        htmlspecialchars($_POST['amount']),
        htmlspecialchars($_POST['amountType']),
        htmlspecialchars($_POST['bestBefore']));
    $stmt->execute();

    $result = ['status' => 'success'];

    $stmt->close();
    $conn->close();

    echo json_encode($result);
?>