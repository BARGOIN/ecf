<?php
namespace src\Classes ;


//on declare l'objet : Compte, avec le mot cle :class
// on defini deux proprietes (variable) :  id,un nom, une date de modif
// on défini des methodes(fonction) :  hydrate, isNew...

/**
 * Undocumented class
 */
class Mark
{
    protected int $id = null;

    protected string $name = null;

    protected string $update = null;




 /**
  * Undocumented function
  *
  * @param array|null $data
  */
    public function __construct(array $data=null)
    {
        if(!is_null($data)){
            $this->hydrate($data);
        }
        
    }

    //=================================================================
    //    Hydrate
    //=================================================================

    /**
     *   function hydrate
     *
     * @param array $data
     * @return self
     */
    public function hydrate(array $data):self
    {
        foreach($data as $key=>$value)
        {
           $method = 'set' . ucfirst($key);
           if(method_exists(__CLASS__, $method)){
                $this->$method($value);
           }

        }
        return $this;
    }
        //=================================================================
        //    isNew
        //=================================================================
    /**
     *   function isNew
     *
     * @return boolean
     */
    function isNew():bool{
        return !isset($this->id);
     }
 

     /**
      * getter de id: retourne la valeur de id
      *
      * @return integer
      */
     public function getId(): int
     {
         return $this->id;
     }

     /**
      * setter de id: si l id est superieur ou égale à 0, un message apparait 
      *
      * @param [type] $id
      * @return self
      */
     public function setId($id): self
     {
         if($id <=0) {
             trigger_error('erreur ', E_USER_ERROR);
         }
         $this->id = $id;
         return $this;
     }
}