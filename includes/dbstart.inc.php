<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn -> connect_error) 
    die("Connection failed: " . $conn -> connect_error);

$sql = "SHOW DATABASES";
$result = $conn->query($sql);
$flagged = false;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row['Database'] === 'ecommerce')
            $flagged = true;
    }
} else {
    echo "0 results";
}

if (!$flagged) {
    include('dbinit.inc.php');
}