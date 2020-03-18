<?php
    require '../functions/HandleFood.php';

    $data = new HandleFood();
    $manager = new Manager();
    $foodTableName = $data->getFoodTableName();
    $foodName = htmlspecialchars($_POST['foodName']);
    $newFoodName = htmlspecialchars($_POST['newFoodName']);
    $newFoodAmount = htmlspecialchars($_POST['newAmount']);
    $newFoodAmountType = htmlspecialchars($_POST['newAmountType']);
    $newFoodBestBefore = htmlspecialchars($_POST['newBestBefore']);
    $conn = $manager->connect();

    $stmt = $conn->prepare("UPDATE $foodTableName SET foodName = ?, amount = ?, amountType = ?, bestBefore = ? WHERE foodName = ?");
    $stmt->bind_param(
        'sisss',
        $newFoodName,
        $newFoodAmount,
        $newFoodAmountType,
        $newFoodBestBefore,
        $foodName
    );

    $stmt->execute();

    $result = ['status' => 'success'];

    $stmt->close();
    $conn->close();

    echo json_encode($result);
?>