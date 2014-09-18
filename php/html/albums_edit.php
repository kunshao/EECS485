<?php
echo "Edit Test";
include 'db.php';
?>

<html>
<head>
<title>Edit Album</title>
</head><body>


<?php
if (isset($_POST["op"]))
{
    switch ($_POST["op"]){
        case 'add':
            if(isset($_POST["title"]) && isset($_POST["username"])){
                $title= $_POST['title'];
                $username = $_POST['username'];
                $sql = "INSERT INTO Album (title, created, lastupdated, username) 
                        VALUES (:title, :created, :lastupdated, :username)";
                $stmt = $pdo->prepare($sql);

                $dt = date('Y-m-d H:i:s'); // NOW()
                $stmt->execute(array(
                    ':title' => $title,
                    ':created' => $dt,
                    ':lastupdated' => $dt,
                    ':username' => $username
                    ));
                unset($_POST["title"]);
                unset($_POST["username"]);
            }
            unset($_POST["op"]);
            break;

        case 'delete':
            if (isset($_POST["albumid"])){
                $albumid = $_POST['albumid'];
                $sql = "DELETE FROM Album
                        WHERE albumid = :albumid";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':albumid' => $albumid
                    ));
                unset($_POST["albumid"]);
            }
            unset($_POST["op"]);
            break;

        default:
            # code...
            break;
    }
}
?>


<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_GET['username']))
{
    $username = $_GET['username'];
    $stmt = $pdo->query(
        "SELECT title, albumid
         FROM Album
         WHERE username = '$username' "
        );

    echo('<table border=0.3>'."\n");
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) 
    {
        echo "<tr><td>";
        echo(htmlentities($row['title']));
        ?>
        </td><td>

        <form action="/album/edit" method="get">
        <input type="hidden" name="id" value="<?php echo $row['albumid']?>" >
        <input type="submit" value="edit">
        </form>

        </td><td>

        <form method="post">
        <input type="hidden" name ="albumid" value= "<?php echo $row['albumid']?>"> 
        <input type="submit" name ="op" value ="delete">
        </form>

        </td></tr>

        <?php
    }
    ?>
    </table>

    <form method="post">
    New Album: <input type="text" name="title">
    <input type="hidden" name ="username" value= "<?php echo $username?>" >
    <input type="submit" name ="op" value ="add">
    </form>
    <?php

}
?>

</body>
</html>



