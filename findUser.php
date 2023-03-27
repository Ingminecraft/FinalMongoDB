
<?php
    session_start();
    require_once('dbconnect.php');
	
	
function showData($db)
{
    $result = $db->User->find();
    $showData = iterator_to_array($result);
    return $showData;
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

		        
				<?php
            $All = showData($db);
            foreach ($All as $Data)
            {
                echo '<p>'.$Data['Id'].'</p>';
                echo '<p>'.$Data['Name'].'</p>';
				echo '<p>'."Score :".$Data['Score'].'</p>';
				?>
				<a href="Edit.php?id=<?php echo $Data['_id']; ?>">
				<?php
				echo '<button type="button">Edit</button></a>';
				?>
				<a href="Delete.php?id=<?php echo $Data['_id']; ?>">
				<?php
				echo '<button type="button">Delete</button></a>';
				echo '<hr>';
            }
        ?>
</body>
</html>