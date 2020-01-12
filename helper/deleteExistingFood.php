<?php
require '../functions/Manager.php';

$manager = new Manager();
$conn = $manager->connect();

$stmt = $conn->prepare("DELETE FROM food WHERE foodName = ?");
$stmt->bind_param('s', htmlspecialchars($_POST['foodName']));
$stmt->execute();

$result = ['status' => 'success'];

$stmt->close();
$conn->close();

echo json_encode($result);
?>