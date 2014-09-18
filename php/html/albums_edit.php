<?php
echo "Edit Test";
include 'db.php';
?>

<html>
<head>
<title>Edit Album</title>
</head><body>


<?php
if(isset($_POST["title"])){
    $t= $_POST['title'];

    switch ($_POST["op"]){
        case 'add':
            $sql = "INSERT INTO Album (title, created, lastupdated, username) 
                    VALUES (:title, :created, :lastupdated, :username)";
            $stmt = $pdo->prepare($sql);

            $dt = date('Y-m-d H:i:s'); // NOW()
            $stmt->execute(array(
                ':title' => $t,
                ':created' => $dt,
                ':lastupdated' => $dt,
                ':username' => "sportslover"
                ));
            break;
        
        default:
            # code...
            break;
    }


    // header( 'Location: /albums/edit?username=sportslover' ) ;
    // return;
}
?>


<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_GET['username']))
{
    $username = $_GET['username'];
    // $username = htmlentities($_GET["username"]);
    $stmt = $pdo->query(
        "SELECT title
         FROM Album
         WHERE username = '$username' "
        );

    echo('<table border=0.3>'."\n");
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) 
    {
        echo "<tr><td>";
        echo(htmlentities($row['title']));
        echo("</td><td>");
        echo "Edit";
        // echo('<a href="edit.php?id='.htmlentities($row['title']).'">Edit</a> / ');
        echo("</td><td>");
        echo "Delete";
        // echo('<a href="delete.php?id='.htmlentities($row['title']).'">Delete</a>');
        echo("\n</form>\n");
        echo("</td></tr>\n");
    }

}
?>


</table>
<form method="post">
New Album: <input type="text" name="title">
<!--     <input type="hidden" name ="username" value= "<?php echo $username?>" > -->
<input type="hidden" name ="username" value= "sportslover">
<input type="submit" name ="op" value ="add">
</form>

</body>
</html>



