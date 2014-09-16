{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<?php
	require_once "db.php";
	$sql="SHOW TABLES";
	$stmt = $pdo->query("SHOW TABLES");
	while ( $row = $stmt->fetch(PDO::FETCH_NUM) ) {
		echo $row[0];
		echo "<br>";
	}
	echo "try";
?>
<head>
	<title>Group 76 Project1</title>
</head>
<boby>
	<header>Test header</header>
	<h1>INDEX</h1>
	<p class="center">
  		Welcome!
	</p>
	<p>This is Group 76's Photo Album!</p>
	<footer>Test footer</footer>
</body>

{/block}