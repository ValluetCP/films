<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/filmModel.php";

if (isset($_GET['id_film'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_film'];
    // appel de la methode returnBook
    $film = Film::findFilmById($id);
}

?>

<div class="container">
    <h1 class="m-5">Ajouter un film</h1>
    <form action="./traitement/action.php" method="post">

        <div class="form-group  mb-3">
            <label class="m-2">Titre du film :</label>
            <input type="text" class="form-control text-uppercase" name="title" value="<?= !empty($film) ? $film["title"] : "" ?>">
            <?php
            // if (!empty($film)) {
            //     echo $film["title"];
            // } else {
            //     echo "";
            // }
            ?>
        </div>

        <div class="form-group  mb-3">
            <label class="m-2">Nbr d'acteurs principaux :</label>
            <input type="number" class="form-control text-uppercase" name="number_main_actors" value="<?= !empty($film) ? $film["number_main_actors"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2">Total nbr d'acteurs :</label>
            <input type="number" class="form-control text-uppercase" name="number_total_actors" value="<?= !empty($film) ? $film["number_total_actors"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2">Total nbr d'acteurs :</label>
            <input type="hidden" class="form-control text-uppercase" name="id_film" value="<?= !empty($film) ? $film["id_movie"] : "" ?>">
        </div>
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name=<?= !empty($film) ? "update_film" : "add_film" ?>> <?= !empty($film) ? "Update" : "Add" ?> Film</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>