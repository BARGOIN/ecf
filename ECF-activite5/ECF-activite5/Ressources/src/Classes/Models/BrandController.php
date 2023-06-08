<?php

namespace Classes\Models;

/**
 * Développer le contrôleur BrandController() avec seulement les méthodes :
 *      
1 index() :
 récupère la liste des marques depuis le model et appelle un fichier brand.index.php dans un dossier view (un var_dump | autre affiche dans la vue)
2. add() : 
si un formulaire adéquate n’est pas posté → appelle un fichier de vue brand.add.php avec le formulaire (faite simple, juste le formulaire en HTML) ;
si un formulaire est posté : affiche ‘il faudra vérifier les données cet après-midi en même temps que le dev des fichiers de vues’  
 */
 


 /**
  * Undocumented class
  */
class BrandController
{


    



    /**
     * récupère la liste des marques
     *
     * @return array
     */
    public function findAll():array
    {
        $q = $this->pdo->query('SELECT id, marque as `name`, date_modif as `update` FROM marques');
        return $q->fetchAll(PDO::FETCH_CLASS, '\Classes\Models\Brand');
    }








}