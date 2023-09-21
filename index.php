<?php
include_once "./views/inc/header.php";
include_once "./views/inc/nav.php";
require_once "./models/actorModel.php";
require_once "./models/filmModel.php";
$actorList = Actor::findAllActors();
$filmList = Film::findAllFilm();
?>

<div class="container mb-5">
    <h2 class="m-5">Liste des acteurs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Actor</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($actorList as $actor){ ?>
                <tr>
                    <td><?= $actor['id_actor']; ?></td>
                    <td><?= $actor['name']; ?></td>
                    <td><?= $actor['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="container mb-5">
    <h2 class="m-5">Liste des films</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Movie</th>
                <th>Title</th>
                <th>Number main actors</th>
                <th>number_total_actors</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($filmList as $film){ ?>
                <tr>
                    <td><?= $film['id_movie']; ?></td>
                    <td><?= $film['title']; ?></td>
                    <td><?= $film['number_main_actors']; ?></td>
                    <td><?= $film['number_total_actors']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php
include_once "./views/inc/footer.php";
?>