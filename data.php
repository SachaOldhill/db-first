<?php
    function getConnection( $servername = "localhost",
                            $username = "root",
                            $password = "root",
                            $dbname = "db_hotel") {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn && $conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        }
        return $conn;
    }
    function closeConn($conn, $stmt) {
        $stmt -> close();
        $conn -> close();
    }
    function getPagantiSql() {
        return "
            SELECT `paganti.name, paganti.lastname, paganti.ospite_id
            FROM paganti
        ";
    }
    function getOspiteById() {
        return "
            SELECT name, lastname
            FROM ospiti
            WHERE id = ?
        ";
    }
?>
