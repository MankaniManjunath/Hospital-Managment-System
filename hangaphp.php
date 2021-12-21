<?php
$con = mysqli_connect("localhost","root","root","gagan");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT Lastname FROM Persons ORDER BY LastName;";
$sql .= "SELECT Country FROM Customers";

// Execute multi query
if (mysqli_multi_query($con, $sql)) {
  do {
    // Store first result set
    if ($result = mysqli_store_result($con)) {
      while ($row = mysqli_fetch_row($result)) {
        printf("%s\n", $row[0]);
      }
      mysqli_free_result($result);
    }
    // if there are more result-sets, the print a divider
    if (mysqli_more_results($con)) {
      printf("-------------\n");
    }
     //Prepare next result set
  } while (mysqli_next_result($con));
}

mysqli_close($con);
?>