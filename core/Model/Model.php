<?php

//the namespace let us avoid confussions if we are calling
//the controller class with the same name 

namespace Model;

// this class is to be use as base, not to use directly
// "abstract" make sure it's impossible to use this class directly
abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct(){
         $this->pdo = \Database::getPdo();
    }



/**
 * trouver un élément par son id
 * renvoie un tableau contenant l'élément, ou un booleen
 * si inexistant
 * 
 * @param integer $id
 * @return array|bool
 */
public function find(int $id)
{

 

  $maRequete = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id =:id");

  $maRequete->execute(['id' => $id]);

  $item = $maRequete->fetch();

  return $item;

}
    /**
 * retourne un tableau contenant tous les éléments de 
 * une table
 * 
 * @return array
 */
public function findAll() : array
{
       

        $resultat =  $this->pdo->query("SELECT * FROM {$this->table}");
        
        $items = $resultat->fetchAll();

        return $items;

}


/**
 * supprime un élément via son ID
 * @param integer $id
 * @return void
 */
public function delete(int $id) :void
{
 

  $maRequete = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id =:id");

  $maRequete->execute(['id' => $id]);


} 

}