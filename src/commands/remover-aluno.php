<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManeger = $entityManagerFactory->getEntityManager();


$id = $argv[1];

$aluno = $entityManeger->getReference(Aluno::class, $id);

$entityManeger->remove($aluno);
$entityManeger->flush();
