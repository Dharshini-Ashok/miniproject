<?php
include('connection.php');

      session_start();
      
      //if submit button was clicked
      if(isset($_POST['submit'])){
        //this username below is use to make a directory user who fill the form
        $username = $_POST['username'];
        
        $files = array_filter($_FILES['files']['name']); //file yang diupload dijadikan array
        $total_count = count($_FILES['files']['name']); //menghitung jumlah array
        for($i = 0 ; $i < $total_count ; $i++) {
          $tmpFilePath = $_FILES['files']['tmp_name'][$i]; //checking the tmp file each file
          if($tmpFilePath !=""){
            //set new dir each user who fill the form with their username
            $dirusers = "./files/". $username;
            if (!is_dir($dirusers)) {
              // Create the directory if it doesn't exist
              mkdir($dirusers, 0777, true); // You might want to adjust the permission here
            }
            
            $newPathFile = "$dirusers/" .$_FILES['files']['name'][$i];
            //memindah file ke dalam folder yang telah dibuat
            move_uploaded_file($tmpFilePath, $newPathFile);
          }
        }
        $serializedFiles = serialize($files);
        //insert into mysqli
        $serializedFiles = serialize($files);
        $query = "INSERT INTO yourtable (username, files) VALUES ('$username', '$serializedFiles')";
        $query_run = mysqli_query($conn, $query);
        
        if($query_run){
          echo"<script>alert('success insert into database!');</script>";
        } else {
          echo"<script>alert('Opps, failed insert into database!');</script>";
        }
      }
      



?>