<?php

include_once "PDO.php";

$uvjet = isset($_GET["uvjet"]) ? $_GET["uvjet"] : "";

$izraz = $db->prepare("select * from users where username like :uvjet");

$izraz->execute(["uvjet"=> "%" . $uvjet . "%" ]);

$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

//foreach($rezultati as $red){
//    echo $red->naziv, "<br />";
//}

//echo "<pre>";
//var_dump($rezultati);
//echo "</pre>";