<?php

namespace App\Models\Contracts;

use Medoo\Medoo;

abstract class BaseModel implements CRUDInterface
{
    protected $database;
    protected $table;
    protected $primaryKey = 'id';

    public function __construct()
    {
        try {
            // Connect to the database.

            $this->database = new Medoo([
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASS']
            ]);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function create(array $data): int
    {
        $this->database->insert($this->table, $data);

        return $this->database->id();
    }

    public function getAll(): array
    {
        $records = $this->database->select($this->table,'*');
        return $records;
    }

    public function get(array $columns, array $where): array
    {
        $records = $this->database->select($this->table,$columns,$where);
        return $records;
    }

    public function find($id): object
    {
        $records = $this->database->get($this->table, '*', [$this->primaryKey => $id]);
        return (object)$records;
    }

    public function update(array $update_data, array $where): int
    {
        $data = $this->database->update($this->table, $update_data,$where);

        return $data->rowCount();
    }

    public function delete(array $where): int
    {
        $data = $this->database->delete($this->table,$where);

        return $data->rowCount();
    }
}