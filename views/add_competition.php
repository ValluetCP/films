<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5">Ajouter une compétition</h1>
    <form action="./traitement/action.php" method="post">
        
        <div class="form-group  mb-3">
            <label class="m-2">Nom du film :</label>
            <input type="text" class="form-control text-uppercase"  name="title" >
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2">Nbr d'acteurs enregistrés :</label>
            <input type="text" class="form-control text-uppercase"  name="number_main_actors" >
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2">Date de diffusion:</label>
            <input type="date" class="form-control text-uppercase"  name="number_total_actors" >
        </div>
          
        <div class="form-group  mb-3">
            <label class="m-2">Nom du gagnant du film :</label>
            <input type="text" class="form-control text-uppercase"  name="title" >
        </div>
        
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_film" value="add_film">Ajouter un film</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>