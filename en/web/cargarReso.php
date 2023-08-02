<?php





//cargar(15,1,8,689,653,427,202);

function cargar($modulo, $ejercicio, $bit, $variable, $pos1, $pos2, $pos3){

    $servername = "localhost";
    $username = "minds22";
    $password = "passwd123";
    $dbname = "admin_minds22";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    for ($i = 399; $i < 1600; $i++) {
        $p1 = ($i * $pos1) / $variable;
        $p2 = ($i * $pos2) / $variable;
        $p3 = ($i * $pos3) / $variable;

        $p1 = round($p1, 0, PHP_ROUND_HALF_DOWN);
        $p2 = round($p2, 0, PHP_ROUND_HALF_DOWN);
        $p3 = round($p3, 0, PHP_ROUND_HALF_DOWN);
        $sql = "INSERT INTO responsive (modulo, ejercicio, bit, alto, pos1, pos2, pos3) VALUES ($modulo, $ejercicio, $bit, $i, $p1, $p2, $p3)";

        if ($conn->query($sql) === TRUE) {
            print "<p>$i</p>\n";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}





?>
