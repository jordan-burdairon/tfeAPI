<?php

namespace App\Mappers;

use App\Dto\BienDTO;
use App\Entity\Biens;

class BienMappers
{
    public static function toBienDTO(Biens $bien) {
        $dto = new BienDTO();
        $dto->setId($bien->getId());
        $dto->setTitle($bien->getTitle());
        $dto->setDescription($bien->getDescription());
        $dto->setSurface($bien->getSurface());
        $dto->setRooms($bien->getRooms());
        $dto->setBedrooms($bien->getBedrooms());
        $dto->setFloor($bien->getFloor());
        $dto->setPrice($bien->getPrice());
        $dto->setHeat($bien->getHeat());
        $dto->setCity($bien->getCity());
        $dto->setAddress($bien->getAddress());
        $dto->setPostalCode($bien->getPostalCode());
        $dto->setSold($bien->getSold());
        $dto->setCreatedAt($bien->getCreatedAt());
        $dto->setImageFront($bien->getImageFront());
        $dto->setType($bien->getType());

        return $dto;
    }


    public static function DTOToBien(BienDTO $dto)
    {
        $bien = new Biens();

        $bien->setTitle($dto->getTitle());
        $bien->setDescription($dto->getDescription());
        $bien->setSurface($dto->getSurface());
        $bien->setRooms($dto->getRooms());
        $bien->setBedrooms($dto->getBedrooms());
        $bien->setFloor($dto->getFloor());
        $bien->setPrice($dto->getPrice());
        $bien->setHeat($dto->getHeat());
        $bien->setCity($dto->getCity());
        $bien->setAddress($dto->getAddress());
        $bien->setPostalCode($dto->getPostalCode());
        $bien->setSold($dto->isSold());
        $bien->setCreatedAt(new \DateTime());
        $bien->setType($dto->getType());

        return $bien;
    }

    public static function DTOToBienUpdate(BienDTO $dto, $bien)
    {

        $bien->setTitle($dto->getTitle());
        $bien->setDescription($dto->getDescription());
        $bien->setSurface($dto->getSurface());
        $bien->setRooms($dto->getRooms());
        $bien->setBedrooms($dto->getBedrooms());
        $bien->setFloor($dto->getFloor());
        $bien->setPrice($dto->getPrice());
        $bien->setHeat($dto->getHeat());
        $bien->setCity($dto->getCity());
        $bien->setAddress($dto->getAddress());
        $bien->setPostalCode($dto->getPostalCode());
        $bien->setSold($dto->isSold());
        $bien->setCreatedAt(new \DateTime());
        $bien->setType($dto->getType());

        return $bien;
    }
}