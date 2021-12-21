<?php

$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$dname = $_POST['dname'];
$did =$_POST['did'];
$dsex =$_POST['dsex'];
$salary =$_POST['salary'];
$qualification =$_POST['qualification'];
$dpho =$_POST['dpho'];

 
$sql = "INSERT INTO doctor (dname,did,dsex,salary,qualification,dpho)
 VALUES ('$dname','$did','$dsex','$salary','$qualification','$dpho')";
if(mysqli_query($link, $sql))
{
?>
<script type="text/javascript">
	alert('Added successfully')
	window.location.href='doctor.html';
</script>
<?php
}
else
{
?>
<script type="text/javascript">
	alert('ERROR IN INSERTING TRY AGAIN')
	window.location.href='doctor.html';
</script>

<?php
}
?>