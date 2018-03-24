<?php
include "includes/connect.php";
include "lib/menu.php";

	if (isset($_GET['page']) and !empty($_GET['page'])) {
		$page=$_GET['page'];
	} else {
		$page='home';
	}

	//$table=mysql_query("select * from `list` where `tname`=''");
    //$row=mysql_fetch_array($table);
?>

<!DOCTYPE html>
<html>
 	<head>
  		<meta charset="utf-8">
  		<title>Task</title>
  		<style>
   			a { 
    			text-decoration: none; 
   			} 
  		</style>
 	</head> 
 	<body>
	  	<header>
	   		<h1>Список задач</h1>
	  	</header>
	  	<form type="text" action="index.php" method="post">
	  		<ul>
			<?php foreach($menu as $item):?>
				<li><a href="<?= $item['url'] ?>"><?=$item['label']?></a></li>
			<?php endforeach?>
			</ul>

			<p> 
				<button type="button" name="addTask"><a href="add.php">Добавить задачу</a></button>
			</p>
			<?php 
				if (file_exists('pages/'.$page.'.inc.php')) { 
				include 'pages/'.$page.'.inc.php';
			}?>
		</form>
	  	<footer>
	    	Copyright Task 2018.
	  	</footer>
 	</body> 
</html>

