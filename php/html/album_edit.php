<?php
include 'db.php';
?>

<html>
<head>
<title>Edit Album</title>
</head><body>


<?php
if (isset($_POST["op"]))
{
    $date = new DateTime();
    $now = $date->format('Y-m-d H:i:s');

    switch ($_POST["op"]){
        case 'add':
            if(isset($_POST["albumid"]) && isset($_FILES['uploadedfile'])){
                include 'uploader.php';

                $albumid = $_POST['albumid'];                        
                $sql = "SELECT MAX(sequencenum) AS MaxSequencenum
                        FROM Contain 
                        WHERE albumid = :albumid";
                $stmt = $pdo->prepare($sql);

                $stmt->execute(array(
                    ':albumid' => $albumid
                    ));

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $max_sequencenum = $row['MaxSequencenum'];
                $sequencenum = $max_sequencenum + 1;

                $sql = "INSERT INTO Photo (picid, url, format, photodate) 
                        VALUES (:picid, :url, :format, :photodate)";
                $stmt = $pdo->prepare($sql);

                $stmt->execute(array(
                    ':picid' => $picid,
                    ':url' => $url,
                    ':format' => $ext,
                    ':photodate' => $now
                    ));

                $sql = "INSERT INTO Contain (albumid, picid, caption, sequencenum) 
                        VALUES (:albumid, :picid, :caption, :sequencenum)";
                $stmt = $pdo->prepare($sql);

                $stmt->execute(array(
                    ':albumid' => $albumid,
                    ':picid' => $picid,
                    ':caption' => $filename,
                    ':sequencenum' => $sequencenum
                    ));

                include 'updatetime.php';
                unset($_POST["albumid"]);
                unset($_FILES['uploadedfile']);
            }
            unset($_POST["op"]);
            break;

        case 'delete':
            if (isset($_POST["albumid"]) && isset($_POST["picid"])){

                $albumid = $_POST['albumid'];
                $picid   = $_POST['picid'];

                $sql = "DELETE FROM Contain
                        WHERE albumid = :albumid AND picid = :picid";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':albumid' => $albumid,
                    ':picid'   => $picid 
                    ));

                #--------find delete file url----------
                $sql = "SELECT url FROM Photo
                        WHERE picid = :picid";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':picid' => $picid
                    ));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $delete_url = $row["url"];

                #--------------------------------------
                $sql = "DELETE FROM Photo
                        WHERE picid = :picid";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':picid' => $picid
                    ));

                if (unlink("static".$delete_url))
                    echo "The photo has been deleted";
                else
                    echo "There was an error deleting the file, please try again!";
                include 'updatetime.php';
                unset($_POST["albumid"]);
                unset($_POST["picid"]);
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

if (isset($_GET['id']))
{
    $albumid = $_GET['id'];
    $stmt = $pdo->query(
        "SELECT picid, caption
         FROM Contain
         WHERE albumid = '$albumid' "
        );

    echo('<table border=0.3>'."\n");
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) 
    {
        echo "<tr><td>";
        echo(htmlentities($row['caption']));
        ?>
        </td><td>

        <form method="post">
        <input type="hidden" name ="albumid" value= "<?php echo $albumid?>"> 
        <input type="hidden" name ="picid" value= "<?php echo $row['picid']?>"> 
        <input type="submit" name ="op" value ="delete">
        </form>

        </td></tr>

        <?php
    }
    ?>
    </table>

    <form enctype= "multipart/form-data" method="post">
    <input type="hidden" name ="albumid" value= "<?php echo $albumid?>" > 
    <input type="hidden" name ="op" value ="add">   
    Choose a picture to upload: <input type="file" name="uploadedfile"><br/>
    <input type="submit" value="Upload File">

    </form>
    <?php

}
?>

</body>
</html>



