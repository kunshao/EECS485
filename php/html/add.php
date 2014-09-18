<?php
echo "hehe";
include 'db.php';
if(isset($_POST["title"])){
    $t= $_POST['title'];
    $sql = "INSERT INTO Album (title, created, lastupdated, username) 
              VALUES (:title, :created, :lastupdated, :username)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':title' => $t,
        ':created' => "2014-09-16 15:27:13",
        ':lastupdated' => "2014-09-16 15:27:13",
        ':username' => "sportslover"
        ));
    header( 'Location: /albums/edit?username=sportslover' ) ;
    return;
}
?>