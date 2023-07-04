<?php

class Job
{
    private $jobTitle;
    private $company;
    private $info;
    private $requirements;
    private $salary;
    private static $countOfJob = 0;


    public function __construct(string $jobTitle, string $company, string $info, array $requirements, int $salary)
    {
        $this->jobTitle = ucwords($jobTitle);
        $this->company = ucfirst($company);
        $this->info = $info;
        $this->requirements = $requirements;
        $this->salary = $salary;
        self::$countOfJob++;
    }

    public static function getCount()
    {
        return self::$countOfJob;
    }


}


