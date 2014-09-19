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
    $sql_next = "SELECT Contain.picid FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.albumid = :pic_album_id AND Contain.sequencenum > :pic_seq ORDER BY Contain.sequencenum ASC LIMIT 1;";
    $smarty->assign('pic_id_next', get_next_or_pre($sql_next,$pic_seq,$pic_album_id));

    #-----------get previous photo id and url-------------------
    $sql_pre = "SELECT Contain.picid FROM Contain INNER JOIN Photo ON Contain.picid = Photo.picid WHERE Contain.albumid = :pic_album_id AND Contain.sequencenum < :pic_seq ORDER BY Contain.sequencenum DESC LIMIT 1;";
    $smarty->assign('pic_id_pre', get_next_or_pre($sql_pre,$pic_seq,$pic_album_id));
    #------------------------------------------------------------------
    function get_next_or_pre($sql,$pic_seq,$pic_album_id){
        include 'db.php';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(":pic_seq" => $pic_seq,
            ":pic_album_id" => $pic_album_id,
            ));
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            return $row["picid"];
            
        }
        $new_sql = str_replace(" AND Contain.sequencenum < :pic_seq ", " ", $sql);
        $new_sql = str_replace(" AND Contain.sequencenum > :pic_seq ", " ", $new_sql);
        return get_first_row($new_sql,$pic_album_id);
    }

    function get_first_row($new_sql,$pic_album_id){
        include 'db.php';
        $stmt = $pdo->prepare($new_sql);
        $stmt->execute(array(":pic_album_id" => $pic_album_id));
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            return $row["picid"];
        }
    }
?>