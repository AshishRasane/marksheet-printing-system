
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpsn";
//$Batch_id=$_POST["Batch_id"];
 $Batch_year=$_POST["Batch_year"];
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Batch(Batch_year)VALUES ('$Batch_year')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>