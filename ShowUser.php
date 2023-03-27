<?php
    session_start();
    require_once('dbconnect.php');

       $Search = $_POST['Search'];
	   if($Search != "")
	   {
	   $resultId = $db->User->find(array("Id" => $Search));
	   $resultName = $db->User->find(array("Name" => $Search));
	   $resultScore = $db->User->find(array("Score" => $Search));
	   
	   $showDataId = iterator_to_array($resultId);
	   $showDataName = iterator_to_array($resultName);
	   $showDataScore = iterator_to_array($resultScore);
	   }
	   else
	   {
		$resultId = $db->User->find();
		$showDataId = iterator_to_array($resultId);
	   }

?>

<html>
    <head>
        <title>Final</title>
    </head>
    <body>
        <form method="post" action="ShowUser.php">
                <label for="Search">Search </lable><input type="Search" name="Search" /><br>
                <br>
				<input type="submit" value="Search">
        </form>
		<a href="AddUser.php"><button type="button">Add</button></a><hr>
	<div>
        <?php
            foreach ($showDataId as $Data)
            {
                echo '<p>'.$Data['Id'].'</p>';
                echo '<p>'.$Data['Name'].'</p>';
				echo '<p>'."Score :".$Data['Score'].'</p>';
				echo '<a href="url"><button type="button">Edit</button></a>';
				echo '<a href="url"><button type="button">Delete</button></a>';
				echo '<hr>';
            }

		if($Search != "")
	   {

            foreach ($showDataName as $Data)
            {
                echo '<p>'.$Data['Id'].'</p>';
                echo '<p>'.$Data['Name'].'</p>';
				echo '<p>'."Score :".$Data['Score'].'</p>';
				echo '<a href="url"><button type="button">Edit</button></a>';
				echo '<a href="url"><button type="button">Delete</button></a>';
				echo '<hr>';
            }

            foreach ($showDataScore as $Data)
            {
                echo '<p>'.$Data['Id'].'</p>';
                echo '<p>'.$Data['Name'].'</p>';
				echo '<p>'."Score :".$Data['Score'].'</p>';
				echo '<a href="url"><button type="button">Edit</button></a>';
				echo '<a href="url"><button type="button">Delete</button></a>';
				echo '<hr>';
            }
       
	   }
	    ?>
    </div>  
</body>
</html>