<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with password) */
$link = mysqli_connect("localhost", "root", "fitorefitore", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
 
// Attempt insert query execution
$sql = "INSERT INTO perdoruesit (username, email, phone, password, zip) VALUES ('$username', '$email', '$phone', '$password' ,'$zip')";
if(mysqli_query($link, $sql)){
    header('Location: login.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>