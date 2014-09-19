<?php
$sql = "UPDATE Album
        SET lastupdated= :lastupdated
        WHERE albumid = :albumid";
$stmt = $pdo->prepare($sql);

$stmt->execute(array(
    ':lastupdated' =>$now,
    ':albumid' => $albumid
    ));
?>