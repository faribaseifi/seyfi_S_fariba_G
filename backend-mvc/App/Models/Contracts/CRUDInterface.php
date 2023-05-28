<?php

namespace App\Models\Contracts;

interface CRUDInterface
{
    #Create (insert)
    public function create(array $data): int;

    #Select
    public function get(array $columns, array $where): array;

    public function find($id): object;

    #Update Record
    public function update(array $data, array $where): int;

    #Delete
    public function delete(array $where): int;
}