<?php

include 'HTML/conect.php';


$sql = "SELECT * FROM allrestaurant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	 while($row = $result->fetch_assoc()) {
        
      $arr[] = $row;
      }
  echo json_encode($arr);
 } else {
  echo "0 results";
}
$conn->close();
?>