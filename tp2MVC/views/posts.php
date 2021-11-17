

<table class="table table-bordered table-stripped">
    <thead>
        <th>#</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actif ?</th>
        <th>Crée le</th>
        <th>Commentaires</th>
    </thead>
    <tbody>
        <?php foreach ($req as $re):?>
            <tr>
                <td><?php echo $re['id'] ?></td>
                <td><?php echo $re['title'] ?></td>
                <td><?php echo $re['description'] ?></td>
                <td><?php echo $re['active'] ?></td>
                <td><?php echo $re['created_at'] ?></td>
                <td><a href="index.php?action=comments-list&id=<?php echo $re['id'];?>"><button>Voir</button></a></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>