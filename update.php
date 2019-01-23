
 <?php
include_once "PDO.php";


$uvjet = $_GET["id"];

$izraz = $db->prepare("select * from users where id = :id");

$izraz->execute($_GET);

$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

// print_r($rezultati);
 
foreach($rezultati as $row){
   $administrator = $row->administrator;
   $firstName = $row->firstName;
   $lastName = $row->lastName;
   $username = $row->username;
   $password = $row->password;
   $profilePhoto = $row->profilePhoto;
   $registerWithGoogle = $row->registerWithGoogle;
   $registerWithFacebook = $row->registerWithFacebook;
}
?>
 

 <form action="change.php" method="post">
    <input type="hidden" name="id"  value=" <?php echo $_GET["id"]; ?> "/>
    <input type="text" name="administrator" value="<?php echo $administrator ?>" placeholder="administrator" />
    <input type="text" name="firstName" value="<?php echo $firstName ?>" placeholder="firstName" />
    <input type="text" name="lastName" value="<?php echo $lastName ?>" placeholder="lastName" />
    <input type="text" name="username" value="<?php echo $username ?>" placeholder="username" />
    <input type="text" name="password" value="<?php echo $password ?>" placeholder="password" />
    <input type="text" name="profilePhoto" value="<?php echo $profilePhoto ?>" placeholder="profile photo" />
    <input type="text" name="registerWithGoogle" value="<?php echo $registerWithGoogle ?>" placeholder="register with Google" />
    <input type="text" name="registerWithFacebook" value="<?php echo $registerWithFacebook ?>" placeholder="register with Facebook" />
    <input type="submit" value="Update" />
</form>