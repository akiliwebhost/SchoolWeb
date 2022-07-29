<?php
require_once 'connect.php';

$text = $_REQUEST['text'];
$text2 = $_REQUEST['text2'];
$date = $_REQUEST['goaldate'];


$sql = "INSERT INTO signatures (full_name, Email, goal_date) VALUES ";
$sql .= "('" . $text . "',";
$sql .= "'" . $text2 . "',";
$sql .=  "'" . $date . "')";


//print $sql;
if(mysqli_query($link, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";
 ?>
