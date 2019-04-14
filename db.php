<?php
$tns = " (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521)) ) (CONNECT_DATA = (SERVICE_NAME = xe) ) ) ";
try {
    $conn = new PDO("oci:dbname=" . $tns . ";charset=utf8", "anhj", "anhj");
   // echo "oracle 연결 성공";
} catch (PDOException $e) {
    echo "oracle 연결 실패" . $e->getMessage();
}
