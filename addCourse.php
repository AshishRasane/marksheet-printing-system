
 
			
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpsn";
$course_id=$_POST["course_id"];
 $course_name=$_POST["course_name"];
 $year=$_POST["year"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Course(Course_name,Years)VALUES ('$course_name','$year')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>