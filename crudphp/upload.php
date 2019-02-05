<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$fname=$_POST['name'];
$lname=$_POST['price'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO product (name, price, image_location)
VALUES ('$fname', '$lname', '$location')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
// }
}
// }
?>