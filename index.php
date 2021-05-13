<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        body {
            background: purple;
            color: white;
        }
    </style>
    <script>
        function init() {
            console.log('hello');
        }
        document.addEventListener("DOMContentLoaded",init);
    </script>
    <title>PHP - MYSQL</title>
</head>
<body>
    <div id="app" class="container text-center">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>DB</h1>
                <?php
                    require_once "data.php";
                    $id = $_GET['id'];
                    $conn = getConnection();
                    $sql = getOspiteById();
                    $stmt = $conn -> prepare($sql);
                    $stmt -> bind_param("i", $id);
                    $stmt -> execute();
                    $stmt -> bind_result($name, $lastname);
                    $stmt -> fetch();
                    echo $name . ' ' . $lastname . '<br>';
                    closeConn($conn, $stmt);
                ?>
            </div>
        </div>
    </div>
</html>



<!-- php
                    $servername = "localhost";
                    $username = "guybrush";
                    $password = "code";
                    $dbname = "dbhotel";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn && $conn->connect_error) {
                        echo "Connection failed: " . $conn->connect_error;
                    }
                    $sql = "SELECT * FROM ospiti";
                    $result = $conn -> query($sql);
                    if ($result && $result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()) {
                            echo $row['name'] . ' ' . $row['lastname'] . '<br>';
                        }
                    } else {
                        echo 'error';
                    }
                    $conn->close();
php -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        body {
            background: purple;
            color: white;
        }
    </style>
    <script>
        function init() {
            console.log('hello');
        }
        document.addEventListener("DOMContentLoaded",init);
    </script>
    <title>PHP - MYSQL</title>
</head>
<body>
    <div id="app" class="container text-center">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>DB</h1>
                php
                    require_once "data.php";
                    $conn = getConnection();
                    $sql = getPagantiSql();
                    $stmt = $conn -> prepare($sql);
                    $stmt -> execute();
                    $stmt -> bind_result($name, $lastname, $osId);
                    while ($stmt -> fetch()) {
                        if ($osId) {
                            echo '<a href="/ospiti.php?id=' . $osId . '">'
                                . $name . ' ' . $lastname . ' ' . $osId
                                . '</a><br>';
                        } else {
                            echo $name . ' ' . $lastname . ' ' . $osId . '<br>';
                        }
                    }
                    closeConn($conn, $stmt);
                php
            </div>
        </div>
    </div>
</html> -->
