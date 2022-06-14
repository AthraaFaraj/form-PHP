<?php 

$con = new mysqli("localhost","root","","kurk");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

if(isset($_POST['text'])){
    $text=$_POST['text'];
   $email=$_POST['email'];
//    printf($text);
//    echo "<div style='color: red ;'>$text</div>";
//    echo "<div class='tt'>$email</div>";
}

$stmt3= "SELECT name2, email2 FROM form WHERE name2='$text'";
$result = $con->query($stmt3);
foreach ($result as $row) {
    // printf("%s (%s)\n", $row["name2"], $row["email2"]);
// make style to the table
    ?>
    <tr>
    <td><?php echo $row['name2']; ?></td><br>
    <td ><?php echo $row['email2']; ?></td><br>
   

    </tr>
    <?php
    }
// $stmt3=$con->prepare("INSERT INTO `form`( `name2`, `email2`) VALUES ('$text','$email')");
// $stmt3= "SELECT name2 FROM form WHERE name2=$text";
// $query = $con->query($stmt3);
//                            while ($row = $query->fetch_assoc()){
    if (isset($text) && isset($email)){
		   
        echo "<div class='cont'><h4>user name:  $text</h4> <h4>email:  $email</h4></div>"."<br>";               
//                         }
    }
// $sql = "SELECT name2, email2 FROM form WHERE name2=$text";



// $result = mysqli_query($con, $sql);

// // Associative array
// $row = mysqli_fetch_assoc($result);
// printf ( $row["name2"]);

// Free result set
// mysqli_free_result($result);

// mysqli_close($con);
         
// $stmt3->execute();
// if($stmt3){
//     echo "sucess";
//     echo "<p>$text</p>";
// }else{
//     echo "wrong";
// }
// $stmt2=$con->prepare("SELECT * FROM form");





// $d=mysqli_query($con, "SELECT name2 FROM form WHERE name2='$text'");

// $d=$con->prepare("SELECT name2 FROM form WHERE name2='$text'");
// echo "$d";
  