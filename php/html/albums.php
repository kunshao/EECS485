<?php
	include 'db.php';
	$u_name = htmlentities($request->userID);
	$sql = "SELECT albumid, title FROM Album Where username = :username ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
        ':username' => $u_name));
    $album_title = array();

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    	$id = $row["albumid"];
    $album_title[$id] = $row["title"];
    }

    $smarty->assign('album_title', $album_title);

?>