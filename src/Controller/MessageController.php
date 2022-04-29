<?php

namespace App\Controller;

use App\Dto\BienDTO;
use App\Dto\MessageDTO;
use App\Mappers\MessageMappers;
use App\Repository\BiensRepository;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcher;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class MessageController extends AbstractFOSRestController
{

    #[Get('/api/messages')]
    #[QueryParam('bien')]
    #[View]
    public function getAll(MessageRepository $repo, BiensRepository $bienRepo, MessageDTO $dto , ParamFetcher $fetcher)
    {
        $bien = $fetcher->get('bien') ?: 9;
        $messages = $repo->findBy(['bien' => $bien]);

        return array_map(fn($item) => MessageMappers::toMessageDTO($item), $messages);

    }



    #[Post('api/addmessage')]
    #[View]
    #[ParamConverter('dto', converter: 'fos_rest.request_body')]
    public function addmessage(BiensRepository $bienRepo,  MessageDTO $dto, EntityManagerInterface $em)
    {
        $bien = $bienRepo->find($dto->getBienId());
        $message = MessageMappers::DTOToMessage($dto);

        $message->setBien($bien);

        $em->persist($message);
        $em->flush();

        return $message->getId();

    }
}