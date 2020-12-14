<?php
include 'HTML/conect.php';

$sql = 'SELECT r_name , r_ID FROM allrestaurant'; 
//'SELECT r_name FROM allrestaurant WHERE r_name LIKE "'.$char.'%"';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        $arr[] = $row;
      }
  
  echo json_encode($arr); 
 } 
 else {
  echo '0 result';
}


$conn->close();

?>