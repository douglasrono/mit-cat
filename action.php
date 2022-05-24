<?php

$con = mysqli_connect("localhost","root","","cat1");
if(isset($_POST['register'])){
    $first = mysqli_real_escape_string($con, $__POST['first']);
    $last = mysqli_real_escape_string($con, $__POST['last']);
    $email = mysqli_real_escape_string($con, $__POST['email']);
    $phone = mysqli_real_escape_string($con, $__POST['phone']);
    $location = mysqli_real_escape_string($con, $__POST['location']);

}
$result="INSERT INTO user (first,last,email,phone,location) VALUES ('$first','$last','$email','$phone','$location')";

if(mysqli_query($con,$result)){
    echo "registration was successiful";
    
}
else{
 echo "error".$result.mysqli_error($con);
    
}
mysqli_close($con);

?>