<?php

use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$entityMenagerFactory = new EntityManagerFactory();
$entityMenager = $entityMenagerFactory->getEntityManager();

var_dump($entityMenager->getConnection());
