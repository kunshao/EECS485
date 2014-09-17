<?php
echo "Edit Test";
include 'db.php';
?>

<html>
<head>
<title>Edit Album</title>
</head><body>

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
<form action="album_edit.php" method="get">
New Album: <input type="text" name="album_name">
<input type="submit" value="Add">
</form>

</body>
</html>



