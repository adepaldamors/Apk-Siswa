<?php
    include "koneksi.php";
    session_start();
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    // $nama = $_POST['nama'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $data = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($data);

    if ($result === 1) {
        // echo "Login Berhasl";
        $_SESSION['username'] = $username;
        header('Location:index.php');

        
    } 
?>