<?php session_start();
require_once 'koneksi.php';
//require_once 'model/fungsi.php';
$op = $_POST['op'];
if ($op == "in") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `karyawan` WHERE username='$username'";
        $stmnt = $dbh->prepare($query);
        $stmnt->execute();
        if ($stmnt->rowCount() == 0) {
            echo '<script type="text/javascript">alert("Username tidak ditemukan");window.location.replace("index.html");</script>';
            //header("Refresh:0; url=index.php");
        } else {
            $query = "SELECT * FROM `karyawan` WHERE username='$username' and password='$password'";
            $stmnt = $dbh->prepare($query);
            $stmnt->execute();
            if ($stmnt->rowCount() == 0) {
                echo "<script type='text/javascript'>alert('Password anda salah'); window.location.replace('index.html');</script>";
                //header("Refresh:0; url=index.php");
            } else {
                while ($row = $stmnt->fetch()) {
                    $_SESSION['username'] = $row['username'];
                        echo '<script>alert("Berhasil Login");window.location.replace("daftar_user.php");</script>';
                }
            }
        }
    } else {
        header("Location: index.html");
    }
} else if ($op == "out") {
    unset($_SESSION['username']);
    echo '<script>alert("Berhasil Logout");window.location.replace("index.html");</script>';
}
?>
