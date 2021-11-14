<?php 

include 'models/database.php';
$base = initDatabse();
$query = "SELECT * FROM posts";
$req = $base->query($query);
$postid=0;


echo'
<h1>Liste des posts</h1>

<table>
    <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actif ?</th>
        <th>Créé le</th>
        <th>Commentaires</th>
    </tr>';
    while ($row = $req->fetch()){
    echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['description'].'</td>';
            if($row['active']){
                echo '<td>Oui</td>';
            }else{
                echo '<td>Non</td>';
            }
            echo '<td>'.$row['created_at'].'</td>
            <td><a href="views/comment.php?$postid='.$postid.'">Voir</td>
        </tr>';
}

echo'</table>';
?>