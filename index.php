<?php

require 'MainFunction.php';
require 'Job.php';
require 'User.php';
require 'Admin.php';
require 'JobSeeker.php';
require 'Employer.php';
require 'Reviews.php';
require 'CompanyReviews.php';
require 'JobSeekerReviews.php';


$job = new Job('junior developer', 'seznam', 'Lorem ipsum dolor sit amet consectetur.', ['php', 'javascript', 'html', 'css', 'sql'], 25000);
debug($job);

$admin = new Admin('Lera', 'lera@email.com', '1234', 'Main Admin');
debug($admin);

$jobSeeker = new JobSeeker('Oleg', 'oleg@email.com', '15678', ['php', 'sql'], 'UJOP', 'none');
debug($jobSeeker);

$employer = new Employer('Egor', 'egor@main.com', '234', 'Alza', 'lorem ipsum ...', 'Praha, 14a');
debug($employer);

$compananyReviews = new CompanyReviews();
printString($compananyReviews->printReviews());
printString($compananyReviews->addReviews());

$jobSeekerReviews = new JobSeekerReviews();
printString($jobSeekerReviews->printReviews());
printString($jobSeekerReviews->addReviews());

printString(Job::getCount());


