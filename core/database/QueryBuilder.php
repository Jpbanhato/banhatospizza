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
}
