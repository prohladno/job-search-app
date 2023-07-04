<?php

class JobSeeker extends User
{
    private $skills;
    private $education;
    private $experience;

    public function __construct(string $name, string $email, string $password, array $skills, string $education, string $experience)
    {
        parent::__construct($name, $email, $password);
        $this->skills = $skills;
        $this->education = $education;
        $this->experience = $experience;
    }

}