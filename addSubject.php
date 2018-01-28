<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpsn";
//access variables for mandatory
 $subject_type=$_POST['subject_type'];
 
 // $subject_type=$_POST['subject_type'];
  //$Esubject_code=$_POST['Esubject_code'];
 //$Esubject_name=$_POST['Esubject_name'];
  //$Esemester= $_POST['Esemester'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

else
	echo "Conneted";
if(isset($subject_type))
{
	$subject_code=$_POST['subject_code'];
    $subject_name=$_POST['subject_name'];
    $credit=$_POST['credit'];
    $semester= $_POST['semester'];
    $sql = "INSERT INTO Subject(Subject_code,Subject_type,Subject_name,Credit,semester)VALUES ('$subject_code','$subject_type','$subject_name','$credit','$semester')";
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>