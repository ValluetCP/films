<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/actorModel.php";
$actorList = Actor::findAllActors();
?>

<div class="container">
    <h1 class="m-5">Liste d'acteur</h1>
    <table class="table">
        <thead>
            <tr>
                <!-- <th>Id Actor</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($actorList as $actor){ ?>
                <tr>
                    <td><?= $actor['id_actor']; ?></td>
                    <td><?= $actor['name']; ?></td>
                    <td><?= $actor['email']; ?></td>
                    <td><a href="./add_actor.php?id_Acteur=<?= $actor['id_actor']; ?>">Update</a></td>
                    <td><a href="traitement/action.php?id_Acteur_delete=<?= $actor['id_actor']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>
