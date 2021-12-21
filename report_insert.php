<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$rid = $_POST['rid'];
$pid =$_POST['pid'];
$disease =$_POST['disease'];
$medicine =$_POST['medicine'];

 
$sql = "INSERT INTO report (report_id,p_id ,disease,medicine)
 VALUES ('$rid','$pid','$disease','$medicine')";
if(mysqli_query($link, $sql)){
?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='report.html';
</script>
<?php
}
?>