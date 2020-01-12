<?php
require '../functions/Manager.php';

$manager = new Manager();
$conn = $manager->connect();

$stmt = $conn->prepare("UPDATE food SET  foodName = ?, amount = ?, amountType = ?, bestBefore = ? WHERE foodName = ?");
$stmt->bind_param(
    'sisss',
    htmlspecialchars($_POST['newFoodName']),
    htmlspecialchars($_POST['newAmount']),
    htmlspecialchars($_POST['newAmountType']),
    htmlspecialchars($_POST['newBestBefore']),
    htmlspecialchars($_POST['foodName'])
);

$stmt->execute();

$result = ['status' => 'success'];

$stmt->close();
$conn->close();

echo json_encode($result);
?>