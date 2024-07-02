<?php
    include('connection.php');
    include('upload.php');
    
    if (isset($_POST['search_submit'])) {
        // Get the username to search
        $search_username = $_POST['search_username'];
    
        // Query to retrieve the serialized files associated with the username
        $query = "SELECT files FROM yourtable WHERE username = '$search_username'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            // Check if there are any files associated with the user
            if (mysqli_num_rows($result) > 0) {
                echo "<h3>Files uploaded by $search_username in Care Connect:</h3>";
                echo "<div class='col-md-12'>";
                echo "<table>";
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    $files = unserialize($row['files']);
                    if ($files !== false) {
                        foreach ($files as $file) {
                            echo "<tr>";
                            echo "<td><b>{$i}<b></td>";
                            echo "<td><img src='files/$search_username/$file' alt='$file' width='500' height='500'><br>'</td>";
                            
                            echo "</tr>";
                        }
                    } else {
                        echo "Error: Unable to unserialize data.";
                    }
                }
                echo "</table>";
                echo"</div>";
            } else {
                echo "No files found for the username: $search_username";
            }
        } else {
            echo "Query failed";
        }
        
    }
?>