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


    public function select()
    {

    }

   
    public function edit()
    {

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


    public function selectAllProdutos($table)
    {
      $sql = "SELECT * FROM {$table} INNER JOIN categoria ON categoria.idCategoria  = {$table}.idCategoria ";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }
    
    public function selectAllCategorias($table)
    {
      $sql = "SELECT * FROM {$table}";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }


    public function insertProdutos($table,$parameters)
    {
      $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)", $table, 
        implode(', ', array_keys($parameters)), 
        ':' . implode(', :', array_keys($parameters))
      );
      try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($parameters);
      }catch (Exception $e){
        die($e->getMessage());
      }  
    }

    public function deleteProdutos($table, $id)
    {
      $sql = "DELETE FROM {$table} WHERE id = {$id}";
      try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
      } catch (Exception $e){
        die($e->getMessage());
      }  

    }

    public function showProdutos($table,$id)
    {
      $sql = "SELECT * FROM {$table} INNER JOIN categoria ON categoria.idCategoria  = {$table}.idCategoria ";
      try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      } catch (Exception $e){
        die($e->getMessage());
      }  
    }


    public function updateProdutos($table, $parameters, $id)
    {
      $sql = sprintf('UPDATE  %s SET %s WHERE %s', $table,  
      implode(',  ', array_map(function($parameters){
        return "{$parameters} = :{$parameters}";
      }, array_keys($parameters))),
      'id = :id'
    );

    $parameters['id'] = $id;    
    try{
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute($parameters);

    } catch (Exception $e){
        die($e->getMessage());
      }  
    }

    /**
     * Usuários:
     */

    /**
     * Outros:
     */

}