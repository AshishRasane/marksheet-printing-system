 
			
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpsn";
//$dept_id=$_POST["dept_id"];
 $dept_name=$_POST["dept_name"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Department(Department_name)
VALUES ('$dept_name')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>