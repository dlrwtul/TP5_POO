<?php 
namespace App\core;

class Constantes {
    public const USER_KEY = 'user';
    public const ROLE_RP = 'ROLE_RP';
    public const ROLE_AC = 'ROLE_AC';
    public const ROLE_ETUDIANT = 'ROLE_ETUDIANT';
    public const ROLE_PROFESSEUR = 'ROLE_PROFESSEUR';
    public const TABLE_PERSONNE = 'personne';
    public const TABLE_CLASSE = 'classe';
    public const TABLE_ANNEE_SCOLAIRE = 'annee_scolaire';
    public const TABLE_MODULE = 'module';
    public const TABLE_DEMANDE = 'demande';
    public const TABLE_INSCRIPTION = 'inscription';
    public const TABLE_PROFESSEUR_CLASSE = 'professeur_classe';
    public const TABLE_PROFESSEUR_MODULE = 'professeur_module';
    

    public static function WEBROOT() {
        return str_replace("index.php","",$_SERVER["SCRIPT_NAME"]);
    } 

    public static function chemin(string $folder,string $file){
        return self::WEBROOT().$folder.DIRECTORY_SEPARATOR.$file;
    }

    public static function ROOT() {
        return str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER["SCRIPT_FILENAME"]);
    } 

    public static function cheminDossier(string $root, string $folder,string $file){
        return self::ROOT().$root.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$file;
    }

    public static function dd($data){
        var_dump($data);
        die();
    }

    public static function createFormInputHidden($data,$route,$chaine = "Details") {

        echo '<form action="'.Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.$route.'" method="post">';
            foreach ($data as $value) {
                echo '<input type="hidden" name="data[]" value=" '.$value.'">';
            }
            echo '<input  class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="submit" value="'.$chaine.'">';
        echo '</form>';
    }
}
