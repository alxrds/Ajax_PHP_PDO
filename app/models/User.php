<?php

    namespace app\models;

    class User extends Model{
        protected $table = 'users';

        public function buscar($nome){
            $sql = "SELECT * FROM {$this->table} WHERE nome like ?";
            $buscar = $this->connection->prepare($sql);
            $buscar->bindValue(1, '%'.$nome.'%');
            $buscar->execute();
            return $buscar->fetchAll();
        }

        public function create($nome, $email){
            $sql = "INSERT INTO {$this->table}(nome, email) VALUES(:nome, :email)";
            $create = $this->connection->prepare($sql);
            $create->bindValue(':nome', $nome);
            $create->bindValue(':email', $email);
            $create->execute();
            return $this->connection->lastInsertId();
        }
    }