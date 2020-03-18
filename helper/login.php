<?php
require '../functions/Manager.php';

session_start();

if ( !empty( $_POST ) ) {

    if ( isset( $_POST['userName'] ) && isset( $_POST['password'] ) ) {
        $userName   = htmlspecialchars( $_POST['userName'] );
        $password   = htmlspecialchars( $_POST['password'] );
        $manager    = new Manager();
        $conn       = $manager->connect();
        $stmt       = $conn->prepare("SELECT userName, password FROM users WHERE userName = ? " );
        $stmt->bind_param('s', $userName);
        $stmt->execute();
        $stmt->bind_result($user,$hash);

        while($row = $stmt->fetch()) {
            if(password_verify($password, $hash)) {
                $_SESSION['user']       = $user;
                $_SESSION['name']       = $user;
                $result = ['status'     => 'success',
                           'message'    => 'Du wurdest erfolgreich eingeloggt!'];
            } else {
                $result = ['status'     => 'noPermission',
                           'message'    => 'Username oder Passwort falsch!'];
            }
        }

    } else {
        $result = ['status'         => 'invalid Form',
                   'message'        => 'Bitte Username und Passwort eingeben!'];
    }
} else {
    $result = ['status'             => 'failed',
               'message'            => 'Huch da lief was gehörig schief!'];
}

echo json_encode($result);

$stmt->close();
$conn->close();