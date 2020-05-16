<?php

namespace Its\Example\Dashboard\Core\Application\Service\Login;

use Its\Example\Dashboard\Core\Domain\Repository\UsersRepository;
use Its\Example\Dashboard\Core\Domain\Model\Users;

class LoginService
{
    protected $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function execute(LoginRequest $request) : LoginResponse
    {
        $email = $request->getEmail();
        $password = $request->getPassword();
        $usersType = $request->getUsersType();
        try {
            $users = $this->usersRepository->findByEmail($email, $password, $usersType);
            if($users->isExist())
            {
                return new LoginResponse('Successfully Login', $users);
            }
            return new LoginResponse('Wrong Credential', NULL, TRUE);
        } catch (\Exception $exception) {
            return new LoginResponse($exception->getMessage(), NULL, TRUE);
        }
    }
}