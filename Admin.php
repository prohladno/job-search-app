<?php

class Admin extends User
{
    private $role;

    public function __construct(string $name, string $email, string $password, string $role)
    {
        parent::__construct($name, $email, $password);
        $this->role = $role;
    }
}


