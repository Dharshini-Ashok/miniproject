<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: homepage.php");
    }
?>
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['fname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        
        
        $sql="select * from form where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from form where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if(!empty($password)){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO form(username, email, pass) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: index.html");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "index.html";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.html";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.html";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>