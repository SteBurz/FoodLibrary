<?php

require '../functions/Manager.php';

$userName   = htmlspecialchars( $_POST['userName'] );

$manager    = new Manager();
$conn       = $manager->connect();

$stmt       = $conn->prepare("SELECT userName FROM users WHERE userName= ? ");
$stmt->bind_param('s', $userName);
$stmt->execute();
$stmt->bind_result($user);
$userExists = false;

while($stmt->fetch()) {
    if($userName == $user){
        $userExists = true;
    }
}

$stmt->close();

if( !$userExists ){
    $tableName = "food".strtolower($userName);
    $password   = password_hash ( htmlspecialchars($_POST['password']), PASSWORD_DEFAULT );

    $stmt    = $conn->prepare("INSERT INTO users (userName, password, tableName) VALUES ( ? , ? , ?)");
    $stmt->bind_param('sss', $userName, $password, $tableName);
    $stmt->execute();
    $stmt->close();

    $stmt    = $conn->prepare("CREATE TABLE " .$tableName." (foodName varchar(65) NOT NULL, amount int(11) NOT NULL, amountType varchar(65) NOT NULL, bestBefore date, PRIMARY KEY(foodName))");
    $stmt->execute();
    $stmt->close();

    $result = ['status'     => 'success',
               'message'    => 'Registrierung erfolgreich!'];
} else {

    $result = ['status'     => 'userExists',
               'message'    => 'Email already in use!'];
}

echo json_encode($result);
$conn->close();

