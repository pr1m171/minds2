<?php
$servername = "localhost";
$username = "minds22";
$password = "passwd123";
$dbname = "admin_minds22";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$modulo = $_GET['modulo'];
$ejercicio = $_GET['ejercicio'];
$bit = $_GET['bit'];
$alto = $_GET['alto'];

$sql = "SELECT * FROM responsive WHERE modulo=".$modulo." AND ejercicio=".$ejercicio." AND bit=".$bit." AND alto=".$alto;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $pos1 = $row["pos1"];
        $pos2 = $row["pos2"];
        $pos3 = $row["pos3"];
    }

    echo $pos1 . "," . $pos2 . "," . $pos3;
} else {
    echo "";
}
$conn->close();

?>