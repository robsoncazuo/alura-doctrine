<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManeger = $entityManagerFactory->getEntityManager();


$id = $argv[1];
$novoNome = $argv[2];

$aluno = $entityManeger->find(Aluno::class, $id);
$aluno->setName($novoNome);

$entityManeger->flush();
