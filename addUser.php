
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpsn";
$user_id=$_POST["User_id"];
 $user_name=$_POST["User_Name"];
 $pass=$_POST["pass"];
 $Role_type=$_POST["role_type"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "INSERT INTO Users(User_id,User_name,Password)VALUES ('$user_id','$user_name','$pass')";
$sql2="INSERT INTO   Role(Roles) VALUES ('$Role_type')";
$sql3="INSERT INTO    users_role(User_id) VALUES('$user_id')";

if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) &&  mysqli_query($conn, $sql3) ) 
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>