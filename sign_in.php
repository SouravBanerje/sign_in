<?php
$conn=mysqli_connect("localhost","root","","login_info");
if($conn){
 //   echo "connection ok";
}
else{
    echo "connection fail";
}
$username_login=$_POST['Username_login'];
$Password_login=$_POST['password_login'];
$check= "SELECT * FROM sign_up WHERE Username='$username_login' && Password='$Password_login'";
$data_send= mysqli_query($conn,$check);

$count= mysqli_num_rows($data_send);
if($count>=1){
        echo "<h2>Login Successfully</h2> ";
}
else {
    echo "Invalid Credentials";
}
?>