<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setName($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManeger = $entityManagerFactory->getEntityManager();

$entityManeger->persist($aluno);
$entityManeger->flush();
