<?php
include "db.php";
$userId = $_POST['userId'];
$userPassword = $_POST['userPassword'];
$userName = $_POST['userName'];
$userGender = $_POST['userGender'];
$passwordHash = hash("sha512", $userPassword);

$stmt = $conn->prepare("INSERT INTO USERTBL VALUES('{$userId}', '{$passwordHash }', '{$userName}', '{$userGender}', SYSDATE)");
$stmt->execute();

if ($stmt) {
    echo '회원가입 성공';
} else {
    echo '오류';
}

?>
