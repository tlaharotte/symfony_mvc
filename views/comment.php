<?php

include "../models/database.php";

$base = initDatabse();
$postid = $_GET['postid'];
$query = "SELECT * FROM comments where post_id = $postid";
$req = $base->query($query);

echo '
<h1>Commentaires</h1>

<table>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th>Créé le</th>
    </tr>';

        while($row = $req->fetch()) {
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['description'].'</td>
            <td>'.$row['created_at'].'</td>
            </tr>';
        }
echo'
</table>
<a href="../index.php">retour</a>';

?>