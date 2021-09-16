<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . "/vendor/autoload.php";

$entityMenagerFactory = new EntityManagerFactory;
$entityManager = $entityMenagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
