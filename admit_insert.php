<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$wno = $_POST['wno'];
$pid =$_POST['pid'];


 
$sql = "INSERT INTO admitsin (wno,p_id)
 VALUES ('$wno','$pid')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
   ?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='admit.html';
</script>
<?php
}
?>