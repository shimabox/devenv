<?php

namespace App\Controller;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task', name: 'task_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $tasks = $em->getRepository(Task::class)->findAll();
        return $this->render('task/index.html.twig', ['tasks' => $tasks]);
    }
}
