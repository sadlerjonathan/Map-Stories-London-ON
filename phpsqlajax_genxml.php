<?php  

require("phpsqlajax_dbinfo.php"); 

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
  // echo "Connected successfully";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, address, lat, lng, type, pic FROM markers";
$result = mysqli_query($conn, $sql);

header("Content-type: text/xml"); 

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"];

    $node = $dom->createElement("marker");  
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("idj",$row['id']); 
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);  
    $newnode->setAttribute("lat", $row['lat']);  
    $newnode->setAttribute("lng", $row['lng']);  
    $newnode->setAttribute("type", $row['type']);
    $newnode->setAttribute("pic", $row['pic']); 
  
  }

} else {

  echo "0 results";

}

$conn->close();
echo $dom->saveXML();


?>