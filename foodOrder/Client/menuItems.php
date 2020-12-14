<?php

include 'HTML/conect.php';

$url = $_REQUEST["url"];

$parse = parse_url($url);
if (isset($parse['query'])) {
	$parseStr = parse_str($parse['query']);
}





/*$sql="SELECT * FROM allrestaurant,menu WHERE r_ID= '".$q."'";*/
$sql = "SELECT allrestaurant.r_name, allrestaurant.r_descb,allrestaurant.r_img,menu.item_id,menu.item_img,menu.item_name,menu.item_desc,menu.item_price
FROM allrestaurant INNER JOIN menu
ON  allrestaurant.r_ID = menu.r_ID AND allrestaurant.r_ID= '".$q."'";

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