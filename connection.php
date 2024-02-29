<?php

$conn=mysqli_connect("localhost","root","","login_info");
if($conn){
  //  echo "connection ok";
}
else{
    echo "connection fail";
}
$username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$con_password=$_POST['con-password'];
$check_email="SELECT * FROM sign_up WHERE Email='$Email'";
$email_send=mysqli_query($conn,$check_email);

$count=mysqli_num_rows($email_send);

if($count>=1){
    echo "Email already exists";
}
else{

    $data= "INSERT INTO sign_up VALUES('','$username','$Email','$Password','$con_password')";

$check=mysqli_query($conn,$data);

if($check){
    echo "<script>
    alert('Registration Successfull');
    </script>";
}
else{
    echo "data is not send";
}

}


?>