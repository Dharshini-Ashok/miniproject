<?php
  //Database Connection
  $con = mysqli_connect("localhost","root","","db_sample");
  
  //Delete image record from database
  $sql = "delete from tbl_images where id = {$_GET["id"]}";
  if($con->query($sql)){
    
    //delete image from server
    unlink("uploads/{$_GET["name"]}");
    
    //redirect to index page with status = 1
    header("location:index.php?status=1");
  }else{
    
    //redirect to index page with status = 0
    header("location:index.php?status=0");
  }
?>
<?php 
            //Message for - Status of deleted Image
            if(isset($_GET["status"])){
              if($_GET["status"]==1){
                $message = "<div class='alert alert-success'>Deleted Successfully</div>";
              }else{
                $message = "<div class='alert alert-danger'>Deleted Successfully</div>";
              }
            }          
          ?>
          <div class='col-md-12'>
        <table class='table'>
          <thead>
            <tr>  
              <th>SNo</th>
              <th>Image</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <td></td>
            <?php 
              $sql ="select * from yourtable";
              $res = $con->query($sql);
              $i=0;
              while($row = $res->fetch_assoc()){
                $i++;
                echo "
                  <tr>
                    <td>{$i}</td>
                    <td><img src='files/{$row["files"]}'  ></td>
                    <td><a href='delete.php?id={$row["id"]}&name={$row["files"]}' class='btn btn-danger'>Delete</a></td>
                  </tr>
                ";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  .content {
	display: grid;
	align-items:center ;
	grid-template-columns: 1fr 1fr 1fr;
	column-gap: 5px;
}
Care Connect is a comprehensive patient record management website designed to streamline healthcare processes and enhance patient care delivery. With intuitive interface and robust features, Care Connect offers healthcare providers a centralized platform to efficiently manage patient information, medical histories, treatment plans. Patients can securely access their records. Care Connect allows patients to upload and view their prescriptions.




foreach ($files as $files) {
                            echo "<img src='files/$search_username/$files' alt='$files'><br> " ;
                        }





                        if ($result) {
            // Fetch the result row
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                // Check if the files data is not empty and not malformed
                if (!empty($row['files'])) {
                    // Unserialize the files data
                    $files = unserialize($row['files']);
                    
                    // Check if unserialize was successful
                    if ($files !== false) {
                        // Print the files associated with the username
                        echo "<h3>Files uploaded by $search_username:</h3>";
                        echo "<table>";
                        $i = 0;
                        foreach ($files as $file) {
                            $i++;
                            echo "<tr>";
                            echo "<td>{$i}</td>";
                            echo "<td><img src='files/{$file}'></td>";
                         
                            echo "</tr>";
                        }
                        echo "</table>";
              
                        
                    } else {
                        echo "Error: Unable to unserialize data.";
                    }
                } else {
                    echo "No files found for the username: $search_username";
                }
            } else {
                echo "No records found for the username: $search_username";
            }
        } else {
            echo "Query failed";
        }