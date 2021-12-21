<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$pname = $_POST['pname'];
$pid =$_POST['pid'];
$psex =$_POST['psex'];
$addr =$_POST['addr'];
$phno =$_POST['phno'];
$doa =$_POST['doa'];
$dod=$_POST['doa'];
 
$sql = "INSERT INTO patient (pname,p_id,psex,addr,p_pho,doa,dod)
 VALUES ('$pname','$pid','$psex','$addr','$phno','$doa','$dod')";
if(mysqli_query($link, $sql)){
?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='patient.html';
</script>
<?php
}
?>