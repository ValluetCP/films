<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/actorModel.php";



if (isset($_GET['id_Acteur'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_Acteur'];
    // appel de la methode returnBook
    $acteur = Actor::findActorById($id);
}
?>

<div class="container">
    <h1 class="m-5">Ajouter un acteur</h1>
    <form action="./traitement/action.php" method="post">
        
        <div class="form-group  mb-3">
            <label class="m-2">Nom Acteur :</label>
            <!-- <input type="text" class="form-control text-uppercase"  name="name" > -->
            <input type="text" class="form-control text-uppercase" name="name" value="<?= !empty($acteur) ? $acteur["name"] : "" ?>">
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2">Email :</label>
            <!-- <input type="email" class="form-control"  name="email" > -->
            <input type="email" class="form-control text-uppercase" name="email" value="<?= !empty($acteur) ? $acteur["email"] : "" ?>">
        </div>
<!-- <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_actor" value="add_actor">Ajouter un acteur</button> -->

<button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name=<?= !empty($acteur) ? "update_actor" : "add_actor" ?>> <?= !empty($acteur) ? "Update" : "Add" ?> Acteur</button>
</form>
</div>

<?php
include_once "./inc/footer.php";
?>

