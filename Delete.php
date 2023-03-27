<?php
	    require_once('dbconnect.php');
	$Id = $_GET['id'];

    $result  = $db->User->deleteOne(array('_id'=> new MongoDB\BSON\ObjectId($Id)));
?>
<meta http-equiv = "refresh" content = "0; url = findUser.php" />
