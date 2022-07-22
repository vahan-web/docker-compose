<?php

include_once(__DIR__ . "/.env.php");
$link = mysqli_connect( "$hostname" , "$username" , "$password", "$db" );
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Connect Successfully.";
$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>surname</th>";
                echo "<th>student_id</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['student_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
mysqli_close($link);

?>
