<?php

namespace App\Mappers;

use App\Dto\UserDTO;
use App\Entity\User;

class UserMappers
{
    public static function toUserDTO(User $user) {
        $dto = new UserDTO();
        $dto->setUsername($user->getUsername());
        $dto->setPassword($user->getPassword());

        return $dto;
    }

}