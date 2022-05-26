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
    public function selectAll($table)
    {
      $sql = "Select * FROM {$table}";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);

      }catch (Exeception $e){
        die($e->getMessage());
      }  

    }

    public function select()
    {

    }

    public function insertProdutos($table,$parameters)
    {
      $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)", $table, implode(', ', array_keys($parameters)), ':' . implode(', :', array_keys($parameters))
      );
      try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($parameters);
      }catch (Exeception $e){
        die($e->getMessage());
      }  
    }
    public function edit()
    {

    }
    public function deleteProdutos($table, $parameters)
    {
      $sql = "DELETE FROM {$table} WHERE id = {$parameters}";
      try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
      } catch (Exeception $e){
        die($e->getMessage());
      }  

    }

    public function read()
    {
      
    }

    /**
     * Categorias:
     */

    /**
     * Produtos:
     */

    /**
     * Usuários:
     */

    /**
     * Outros:
     */

}
