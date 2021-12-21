<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$bill_id = $_POST['bill_id'];
$pid =$_POST['pid'];
$total_amount =$_POST['total_amount'];


 
$sql = "INSERT INTO bill (bill_id,p_id,total_amount)
 VALUES ('$bill_id','$pid','$total_amount')";
if(mysqli_query($link, $sql)){
?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='bill.html';
</script>
<?php
}
?>