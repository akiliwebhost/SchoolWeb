<?php
require_once 'connect.php';

$text = $_REQUEST['text'];
$date = $_REQUEST['goaldate'];
$complete = $_REQUEST['complete'];


$sql = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_complete) VALUES ";
$sql .= "'" . $text . "',";
$sql .=  "'" . $date . "',";


//print $sql;
if(mysqli_query($link, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";
 ?>
