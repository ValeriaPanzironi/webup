<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "0112";
$dbname = "negozio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

function getRes($mail, mysqli $conn){
$sql = "SELECT email FROM clienti WHERE email LIKE '$mail'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "email: ". $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
}

getRes('g%', $conn);

$conn->close();


?>

</body>
</html>