<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$did= $_POST['did'];
$pid =$_POST['pid'];
$wno =$_POST['wno'];
$appointment_date =$_POST['appointment_date'];

 
$sql = "INSERT INTO treats (d_id,p_id,wno,appointment_date)
 VALUES ('$did','$pid','$wno','$appointment_date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
?>