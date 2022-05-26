<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{
    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Métodos:
     */


    /**
     * Categorias:
     */

    /**
     * Produtos:
     */

    /**
     * Usuários:
     */

    public function insert($table,$parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,implode(', ',array_keys($parameters)),
            ':'.implode(', :',array_keys($parameters))
        );

        try{
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);

        } catch (Exeption $e){
            die($e->getMessage());
        }
      
    }

    public function update($table,$id,$parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %S',
            $table,implode(', ', array_map(function($parameters){
                return "{$parameters} = :{parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );

        $parameters['id'] = $id;

        try{
            $stmt = $this->pdo->prepare($sql);
    
            $stmt->execute($parameters);
    
        } catch (Exeption $e){
            die($e->getMessage());
        }    

        header('Location: /admin');
    }

    public function delete($table,$id)
    {
      $sql=sprintf(
        'DELETE FROM %s WHERE %s',
        $table,
        'id - :id'
      );

      try{
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(compact('id'));

    } catch (Exeption $e){
        die($e->getMessage());
    }
        
    }

    public function view()
    {
      
    }

    /**
     * Outros:
     */

}
