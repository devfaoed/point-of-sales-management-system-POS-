<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['username'];
$c = $_POST['password'];

// query
$sql = "UPDATE user 
        SET name=?, username=?, password=? WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$id));
header("location: user.php");

?>