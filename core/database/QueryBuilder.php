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
    public function selectPesquisaProdutos($table, $pesquisa)
    {
        $query = "SELECT * FROM {$table} JOIN categoria ON categoria.idCategoria = produto.idCategoria WHERE nome LIKE '%{$pesquisa}%'";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }catch (Exception $error) {
            die($error->getMessage());
        }
      }
      

    public function selectAll($table)
    {
      $query = "select * from {$table}";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM `{$table}` WHERE id = {$id}";
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function selectPesquisa($table, $pesquisa)
    {
        $query = "SELECT * FROM {$table} WHERE nome LIKE '%{$pesquisa}%'";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function ultimosAdicionados($table)
    {
        $query = "SELECT * FROM {$table} ORDER BY id DESC LIMIT 3";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
    public function countAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        try {
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute();
          return $stmt->rowCount();
        } catch (Exception $e) {
            die("An error occurred when trying to count from database: {$e->getMessage()}");
        }
    }

    /**
     * Categorias:
     */
    public function insertCategoria($table, $dados)
    {
        $query = "insert into {$table} (nome) values ('{$dados['nome']}')";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }

    public function updateCategoria($table, $id, $dados)
    {
        $query = "update {$table} set nome = '{$dados['nome']}' where id= {$id}";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }  
    
    /**
     * Produtos:
     */


    public function selectAllProdutos($table)
    {
      $sql = "SELECT {$table}.*, categoria.nome AS nomeCategoria FROM {$table} JOIN categoria ON categoria.id  = {$table}.idCategoria ";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }
    public function selectAllProdutosPagination($table, $start_limit, $rows_amount)
    {
      $sql = "SELECT {$table}.*, categoria.nome AS nomeCategoria FROM {$table} JOIN categoria ON categoria.id  = {$table}.idCategoria ";
      if  ($start_limit >= 0 && $rows_amount > 0)
      {
          $sql .= " LIMIT {$start_limit}, {$rows_amount}";
      }
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

    public function insertUsuario($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updateUsuario($table, $id, $parameters)
    {


        $sql = sprintf(
            'UPDATE  %s SET %s WHERE %s',
            $table,
            implode(',  ', array_map(function ($parameters) {
                return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );

        $parameters['id'] = $id;

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Outros:
     */
    public function selectLogin($table, $parameters)
    {
        $sql = sprintf(
            "SELECT * FROM %s WHERE email = '%s' AND senha = '%s'", $table, 
            $parameters['email'], $parameters['senha']
          );
          try{  
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                return $stmt->rowCount();
          } catch (Exception $error) {
              die($error->getMessage());
          }
    }

    public function selectAllProdutosSite($table)
    {
      $sql = "SELECT {$table}.*, categoria.nome AS nomeCategoria FROM {$table} JOIN categoria ON categoria.id  = {$table}.idCategoria LIMIT 6";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }

    public function selectPesquisaProdutosSite($table,$pesquisa)
    {
      $sql = "SELECT {$table}.*, categoria.nome AS nomeCategoria FROM {$table} JOIN categoria ON categoria.id  = {$table}.idCategoria WHERE produto.nome LIKE '%{$pesquisa}%'";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }

    public function selectProduto($table,$id)
    {
      $sql = "SELECT * FROM {$table} WHERE id = '$id'";
      $stmt = $this->pdo->prepare($sql);
      try{
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
      }catch (Exception $e){
        die($e->getMessage());
      }  

    }
}
