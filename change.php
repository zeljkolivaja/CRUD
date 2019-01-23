<?php
include_once "PDO.php";

 
$izraz=$db->prepare("update users SET administrator=:administrator, firstName=:firstName, lastName=:lastName,
username=:username,password=:password,profilePhoto=:profilePhoto, 
registerWithGoogle=:registerWithGoogle,registerWithFacebook=:registerWithFacebook
 WHERE id=:id ");

$izraz->execute($_POST);
header("location: index.php");