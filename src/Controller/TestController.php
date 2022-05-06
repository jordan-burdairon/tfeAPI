<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
//    #[Route('/api/test', name: 'app_test')]
//    public function index(EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
//    {
//        $user = new User();
//        $user->setUsername('admin');
//        $user->setRoles(['ROLE_ADMIN']);
//        $user->setPassword($hasher->hashPassword($user, 'admin'));
//
//        $em->persist($user);
//        $em->flush();
//
//        return new JsonResponse(['response' =>'OK']);
//    }
}
