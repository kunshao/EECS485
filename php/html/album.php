<?php
	include 'db.php';
	$album_id = htmlentities($request->albumID);
	$sql = "SELECT Contain.picid, Photo.url FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.albumid = :albumid ORDER BY Contain.sequencenum";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":albumid" => $album_id));
    $pic_url = array();

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    	$pic_id = $row["picid"];
      $pic_url[$pic_id] = $row["url"];
    }
    $smarty->assign('pic_url', $pic_url);
?>