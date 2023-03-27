<?php
	    require_once('dbconnect.php');
	$Id = $_POST['Id'];
    $Name = $_POST['Name'];
	$Score = $_POST['Score'];
    $result  = $db->User->insertOne(array('Id'=>$Id,'Name'=>$Name,'Score'=>$Score));
?>

<meta http-equiv = "refresh" content = "0; url = findUser.php" />