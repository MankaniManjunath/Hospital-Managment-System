<?php
$link = mysqli_connect("localhost", "root","", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$wname = $_POST['wname'];
$wno =$_POST['wno'];
$wtype =$_POST['wtype'];

 
$sql = "INSERT INTO ward (wname,wno,wtype)VALUES('$wname','$wno','$wtype')";
if(mysqli_query($link, $sql)){
 ?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='ward.html';
</script>
<?php
}
?>