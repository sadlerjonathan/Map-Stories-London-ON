<?php

echo "Don't hit refresh working uploading file ~~~~~~~~~~~~~~";

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

$filenameforxml = "upload/" . $_FILES["file"]["name"];

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
 


require("phpsqlajax_dbinfo.php"); 

echo "Don't hit refresh working registering entry ~~~~~~~~~~~~~~";


$tbl_name="markers";
// Connect to server and select database.
mysql_connect("$server", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");

// Get values from form 
$a =$_POST['nameofplace'];
$b =$_POST['addressofplace'];
$c =$_POST['lat'];
$d =$_POST['lng'];
$e ="specialdefault";
$f =$filenameforxml;


$email=$_POST['email'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, address, lat, lng, type, pic) VALUES('$a', '$b','$c','$d', '$e', '$f')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful~~~~~~~~~";
echo "<BR>";
//echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();

echo '<h1><a href="map_d.html">"Click to see newly addded point on maps page"</a></h1>'
?>

