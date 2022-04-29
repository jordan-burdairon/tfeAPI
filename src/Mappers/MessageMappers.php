<?php

namespace App\Mappers;

use App\Dto\MessageDTO;
use App\Entity\Message;

class MessageMappers
{
    public static function toMessageDTO(Message $message) {
        $dto = new MessageDTO();
        $dto->setId($message->getId());
        $dto->setLastname($message->getLastname());
        $dto->setFirstname($message->getFirstname());
        $dto->setMessage($message->getMessage());
        $dto->setEmail($message->getEmail());

        return $dto;
    }

    public static function DTOToMessage(MessageDTO $dto)
    {
        $message = new Message();
        $message->setLastname($dto->getLastname());
        $message->setFirstname($dto->getFirstname());
        $message->setMessage($dto->getMessage());
        $message->setEmail($dto->getEmail());

        return $message;
    }
}