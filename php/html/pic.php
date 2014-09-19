<?php
	include 'db.php';
	$pic_id = htmlentities($request->picid);
	$sql = "SELECT Contain.albumid,Contain.sequencenum, Photo.url FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.picid = :picid";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":picid" => $pic_id));

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $pic_url_current = $row["url"];
      $pic_album_id = $row["albumid"];
      $pic_seq = $row["sequencenum"];
    }
    $smarty->assign('pic_url_current', $pic_url_current);
    $smarty->assign('pic_album_id', $pic_album_id);

    #-----------get next photo id and url---------------------
    $sql_next = "SELECT Contain.picid, Photo.url FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.sequencenum > :pic_seq ORDER BY Contain.sequencenum ASC LIMIT 1;";
    $smarty->assign('pic_info_next', get_next_or_pre($sql_next));
    /*$stmt_next = $pdo->prepare($sql_next);
    $stmt_next->execute(array(":pic_seq" => $pic_seq));

    while ( $row = $stmt_next->fetch(PDO::FETCH_ASSOC) ) {
      $pic_url_next = $row["url"];
      $pic_id_next = $row["picid"];
    }
    $smarty->assign('pic_url_next', $pic_url_next);
    $smarty->assign('pic_id_next', $pic_id_next);*/

    #-----------get previous photo id and url-------------------
    $sql_pre = "SELECT Contain.picid, Photo.url FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.sequencenum > :pic_seq ORDER BY Contain.sequencenum DESC LIMIT 1;";
    $smarty->assign('pic_info_pre', get_next_or_pre($sql_pre));
#------------------------------------------------------------------
    function get_next_or_pre($sql){
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(":pic_seq" => $pic_seq));

        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $pic_id = $row["picid"];
            $pic_url[$pic_id] = $row["url"];
            
        }
        return $pic_url;
    }
?>