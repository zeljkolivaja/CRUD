<?php

include_once "PDO.php";

$izraz=$db->prepare("

    insert into users (administrator,firstName,lastName,username,password,
    profilePhoto,registerWithGoogle,registerWithFacebook)
    values (:administrator,:firstName,:lastName,:username,:password,
    :profilePhoto,:registerWithGoogle,:registerWithFacebook);

    ");
$izraz->execute($_POST);
header("location: index.php");