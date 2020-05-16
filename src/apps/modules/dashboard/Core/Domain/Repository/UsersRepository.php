<?php

namespace Its\Example\Dashboard\Core\Domain\Repository;

use Its\Example\Dashboard\Core\Domain\Model\Users;

interface UsersRepository
{
    public function findByEmail($email, $password, $usersType) : Users;
    public function save($nama, $email, $password, $usersType);
}