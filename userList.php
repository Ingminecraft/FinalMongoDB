<?php
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
    <div>
        <?php
            $All = showData($db);
            foreach ($All as $Data)
            {
                echo '<p>'.$Data['Id'].'</p>';
                echo '<p>'.$Data['Name'].'</p>';
				echo '<p>'."Score :".$Data['Score'].'</p>';
                echo '<hr>';
            }
        ?>
    </div>  
</body>
</html>