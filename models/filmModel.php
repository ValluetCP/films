<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/film/models/database.php";

class Film
{

    // pour la méthode static, pas besoin de déclarer une variable à l'inverse des contructeurs

    // methode pour s'inscrire
    public static function addFilm($title, $numberMainActors, $numberTotalActors)
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("INSERT INTO `film`(`title`, `number_main_actors`, `number_total_actors`) VALUES(?,?,?)");

        // exécuter la requête
        try {
            $request->execute(array($title, $numberMainActors, $numberTotalActors));

            // rediriger vers la page login.php
            header("Location: http://localhost/film/views/list_film.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findAllFilm()
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM `film`");

        // exécuter la requête
        $filmList = null;
        try {
            $request->execute();

            // récupère le résultat dans un tableau
            $filmList = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $filmList;
    }

    // methode pour tout afficher 
    public static function updateFilmById($id, $title, $number_main_actors, $number_actors)
    {
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("UPDATE film set title = ?, number_main_actors=?, number_total_actors=? WHERE id_movie=?");
        //executer la requete

        try {
            $request->execute(array(
                $title, $number_main_actors, $number_actors, $id
            ));
            // recuperer le resultat dans un tableau
            header("Location: http://localhost/film/views/list_film.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function deleteFilmById($id)
    {
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("DELETE FROM film WHERE id_movie=?");
        //executer la requete

        try {
            $request->execute(array($id));
            // recuperer le resultat dans un tableau
            header("Location: http://localhost/film/views/list_film.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findFilmById($id)
    {
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM film WHERE id_movie=?");
        //executer la requete
        try {
            $request->execute(array($id));;
            // recuperer le resultat dans un tableau
            $film = $request->fetch();

            return $film;

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
