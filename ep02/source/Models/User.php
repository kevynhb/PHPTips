<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
//        string $entity, array $required, string $primary = 'id', bool $timestamps = true, array $database = null
        parent::__construct("users", [], "", true);
    }
}