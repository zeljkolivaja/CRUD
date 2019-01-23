<?php

include_once "PDO.php";

$izraz=$db->prepare("
    delete from users where id=:id
");

$izraz->execute($_GET);

header("location: index.php");