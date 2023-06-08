<?php
namespace Classes\Models;
class Autoloader
{   
    /**
     * Undocumented function
     *
     * @return void
     */
    // cette methode est la pour lancer "spl_autoload_register"qui est une fonction
    static function register()
    {
        // spl_autoload_register est une fonction qui detecte les chargements de classes
        // (dès que l 'on fait " new Compte" par exemple)et qui lancera une metode appelée 
        // autoload
    spl_autoload_register([
    __CLASS__,
    'autoload'    
    ]);
    }
    /**
     * Undocumented function
     *
     * @param [type] $class
     * @return void
     */
    static function autoload($class)
    {
        // on recupere dans $class la totalite du namespace de la classe concernée (App\Client\Compte)
        
        // retire App\

       $class = str_replace(__NAMESPACE__  .'\\','', $class);
       echo $class;
       
        // on remplace les "\", par "/", pour ecrire le chemin d'acces
        $class = str_replace( '\\','/', $class);
        echo "<pre>";
         var_dump($class);
        echo "</pre>";
          
        require_once __DIR__ . '/'. $class . '.php';
        // on verif si le fichier existe

        
       
    } 
}