<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManeger = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManeger->getRepository(Aluno::class);
/**
 * @var Aluno[] $alunoList
 */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "Id: {$aluno->getId()} \nNome: {$aluno->getName()}\n\n";
}
