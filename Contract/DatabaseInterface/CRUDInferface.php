<?php


interface CRUDinterface 
{
    public function create(array $data): array;

    public function delete(array $data): array;

    public function show(srting $id): array;

    public function all(): obj;

}