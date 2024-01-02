<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_poliklinik";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_POST['login'])) {
    $pass = md5($_POST['pass']);
    $query = "SELECT * FROM login WHERE username = '$_POST[user]' AND password = '$pass'";
    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    $row5 = $result->num_rows;
    $dt5 = $result->fetch_assoc();

    if ($row5 == 0) {
        echo "<script>alert('Gagal Login !!')</script>";
        echo "<script>document.location = '../views/login.php'</script>";
    } else {
        if ($dt5['level'] == "admin" || $dt5['level'] == "manager" || $dt5['level'] == "apotek" || $dt5['level'] == "pendaftar") {
            $_SESSION['id'] = $dt5['kodelogin'];
            $_SESSION['level'] = $dt5['level'];
            echo "<script>alert('Anda Berhasil login sebagai " . ucfirst($dt5['level']) . "')</script>";
            echo "<script>document.location = '../index.php'</script>";
        }
    }
}

// Close connection
$conn->close();
?>
