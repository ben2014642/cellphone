<?php
$conn = mysqli_connect("localhost","root","","cellphone");

$id = $_GET['id'];

$sql = "SELECT * FROM cp_property_values WHERE id = $id";
$item1 = mysqli_fetch_array(mysqli_query($conn,$sql),1);

print_r($item1['value']);
?>
