<?php

namespace Contract\Model;

interface CRUDCommands 
{
    public function insert(array $collumn,array $value): array;

    public function select(string $table_name): array;

    public function delete(string $table_name, array $conditions ): array;

    public function update(string $table_name, array $conditions  ): array;
}