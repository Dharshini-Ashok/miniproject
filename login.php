<?php
$login = false;
include('connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['fname'];
    $password = $_POST['pass'];
    $sql = "select * from form where username = '$username'or email = '$username'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($row){  
        echo $count;
        if(password_verify($password, $row["pass"])){
            $login=true;
            session_start();
            $sql = "select username from form where username = '$username'or email = '$username'";     
            $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  
            $_SESSION['username']= $r['username'];
            $_SESSION['loggedin'] = true;
            echo "<script> window.location.href = 'homepage.php'; </script>";
            exit();
        }
    }  
    else{  
        echo  '<script>
                    
                    alert("Login failed. Invalid username or password!!")
                    window.location.href = "index.html";
                </script>';
    }     
}
     
?>