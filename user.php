<?php

include 'DBconnect.php';
print_r(json_encode($_POST));
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
	
		
	$gender=$_POST['gender'];	
	
	
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
    $companyname = $_POST['companyname'];
    $q = "INSERT INTO user(name,mobile,email,password,companyId,dob,address,gender) VALUES('" . $name . "','" . $mobile . "','" . $email . "','" . $password . "','" . $companyname . "','" . $dob . "','" . $address . "','" . $gender . "')";
    //echo $q;
    $response = mysqli_query($conn, $q);
    //if (!$response) {
       // echo "error in inserting";
    //} 
}
?>