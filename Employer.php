<?php

class Employer extends User
{
    private $company;
    private $info;
    private $adress;
    
    public function __construct(string $name, string $email, string $password, string $company, string $info, string $adress)
    {
        parent::__construct($name, $email, $password);
        $this->company = $company;
        $this->info = $info;
        $this->adress = $adress;
    }
}

