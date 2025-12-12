$_POST ['Usuario'];
$password = $_POST ['Password'];
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
htmlspecialchars
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Benvingut, " . htmlspecialchars($row["username"]) . "!";
    }
} else {
    echo "Usuari o contrasenya incorrectes.";