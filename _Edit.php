<?php
	    require_once('dbconnect.php');
	$_id = $_GET['id'];
	$Id = $_POST['Id'];
    $Name = $_POST['Name'];
	$Score = $_POST['Score'];
    $result  = $db->User->updateOne(['_id' => new \MongoDB\BSON\ObjectID($_id)], 
	['$set' => ['Id' => $Id,'Name' => $Name,'Score' => $Score,]]);
?>

<meta http-equiv = "refresh" content = "0; url = findUser.php" />