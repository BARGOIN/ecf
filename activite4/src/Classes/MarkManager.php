<?php

namespace src\Classes;
/**
 * Classe Mananager de la marque
 */
class MarkManager
{

    protected PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $mark;
    }

    /**
     * Ajoute un Auteur en base de données
     *
     * @param  
     * @return void
     */
    public function create( )
    {
        if (!$mark->isNew()) {
            trigger_error('Existe déjà', E_USER_ERROR);
        }
        $sql = INSERT INTO `instruments` (`id`, `instrument`, `description`, `stock`, `prix`, `marques_id`, `types_id`, `date_modif`) VALUES
        (14, 'GK Pro Negra', NULL, 2, 1666, 1, 3, '2023-06-04 12:12:43'),
        (15, 'F7 Flamenco Iberia', NULL, 0, 539, 1, 3, '2023-06-04 12:12:43'),
        (16, 'AC110 Open Pore', NULL, 1, 88, 2, 4, '2023-06-04 12:12:43'),
        (17, 'KX100 METALLIC ASH', NULL, 2, 365, 2, 5, '2023-06-04 12:18:33'),
        (18, 'GB34JJ SUNBURST', NULL, 2, 278, 2, 2, '2023-06-04 12:18:33'),
        (19, '514CE 2018 GRAND AUDITORIUM', NULL, 1, 3598, 3, 1, '2023-06-04 12:18:33');;
        $q = $this->db->prepare($sql);
       
        try {
            $q->execute();
            $id = $this->db->lastInsertId();
            $auteur->hydrate(['id' => $id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Retourne toute les marques 
     *
     * @return array
     */
    public function findAll():array
    {
        $q = $this->db->query('SELECT * FROM instruments');
        return $q->fetchAll();

    }


    public function find(int $id)
    {
        $sql = 'SELECT * FROM instruments WHERE id=?';
        $q = $this->db->prepare($sql);
        $q->execute([$id]);
          return $q->fetch(PDO::FETCH_ASSOC);
        
    }



}
