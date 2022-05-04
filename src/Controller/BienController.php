<?php

namespace App\Controller;

use App\Dto\BienDTO;
use App\Mappers\BienMappers;
use App\Repository\BiensRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class BienController extends AbstractFOSRestController
{
    #[Get('/api/biens')]
    #[View]
    public function getAll(BiensRepository $repo) {
        $biens = $repo->findBy(['sold' => false]);
        return array_map(fn($item) => BienMappers::toBienDTO($item), $biens);
    }

    #[Get('/api/bien/{id}')]
    #[View]
    public function getBienById(int $id, BiensRepository $repo)
    {

        $bien = $repo->find($id);

        return BienMappers::toBienDTO($bien);
    }

    #[Post('api/add')]
    #[View]
    #[ParamConverter('dto', converter: 'fos_rest.request_body')]
    public function addBien(BienDTO $dto, EntityManagerInterface $em, ParameterBagInterface $parameterBag)
    {

        $bien = BienMappers::DTOToBien($dto);

        if($dto->getImageFront() !== null) {
            $name = uniqid();
            $base64= explode(',',$dto->getImageFront())[1];
            file_put_contents($parameterBag->get('pictures_directory') . '/' .  $name, base64_decode($base64));
            $bien->setImageFront($name);
        }
        $em->persist($bien);
        $em->flush();

        return $bien->getId();

    }

    #[Put('api/bien/{id}')]
    #[View]
    #[ParamConverter('dto', converter: 'fos_rest.request_body')]
    public function editBien(int $id, BienDTO $dto, BiensRepository $repo, EntityManagerInterface $em)
    {
        $bien = $repo->find($id);
        $dto = BienMappers::DTOToBienUpdate($dto, $bien);
        $em->flush();


        return $dto;
    }

    #[Get('/api/bien')]
    #[View]
    public function getLastFour(BiensRepository $repo, EntityManagerInterface $em)
    {
        $biens = $repo->findAll();
        $bien = $repo->findBy(['sold' => false], ['id' => 'DESC'], 4, 0);

        return  array_map(fn($item) => BienMappers::toBienDTO($item), $bien);
    }



}