<?php
    require_once('dbconnect.php');
	$Id = $_GET['id'];
	

    $result = $db->User->find(array('_id'=> new MongoDB\BSON\ObjectId($Id)));
    $showData = iterator_to_array($result);

            foreach ($showData as $Data)
			{
				$id = $Data['Id'];
                $name = $Data['Name'];
				$score = $Data['Score'];
			}
?>

<html>
    <head>
        <title>Final</title>
    </head>
    <body>
        <form method="post" action="_Edit.php?id=<?php echo $Data['_id']; ?>">
                <label for="Id">ID </lable><input name="Id" value="<?php echo $id?>" required/><br>
				<label for="Name">Name </lable><input name="Name" value="<?php echo $name?>" required/><br>
				<label for="Score">Score </lable><input  name="Score" value="<?php echo $score?>" required/><br>
                <br>
				<input type="submit" value="Edit">
        </form>
		</body>
</html>