<?php

use App\DesignPattern\Structural\Composite\Designer;
use App\DesignPattern\Structural\Composite\Developer;
use App\DesignPattern\Structural\Composite\Organization;

// Prepare the employees
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);
$taylor = new Developer('Taylor Otwell', 31000);

// Add them to organization
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);
$organization->addEmployee($taylor);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 58000
