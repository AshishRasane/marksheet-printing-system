<?php
include('config.php');
session_start();

//expiriry time. 86400 = 1 day (86400*30 = 1 month)
$expiry = time() + (86400 * 30);

$email=$_POST['user'];
$password=$_POST['password'];

if($result = $conn->prepare("SELECT * FROM user where user_id="$email") or die($conn->connect_errno))
{
    // Bind the variables to the parameter as strings.
    $result->bind_param('s', $email);

    // Execute the prepared statement.
    $result->execute();

    // Gets a result set from a prepared statement.
    $result = $result->get_result();

    // Fetch the table data.
    $row = $result->fetch_assoc();

    if (password_verify($password , $row['password']))
    {
        if(!empty($_POST['remember']))
        {
            //setting cookie variable.
            setcookie('user_name', $email, $expiry);
            setcookie('user_pass', $password, $expiry);
        }

        $_SESSION['user']= $row['email'];
        header("location: Homescreen.php");
        $conn->close();
    }
    else
    {
        setcookie('user_name', $email, $expiry);
        header("location: login.php");
    }
}
else
{
    header("location: login.php");
}
?>