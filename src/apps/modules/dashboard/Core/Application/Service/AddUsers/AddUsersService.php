<?php

namespace Its\Example\Dashboard\Core\Application\Service\AddUsers;

use Its\Example\Dashboard\Core\Domain\Repository\UsersRepository;

class AddUsersService
{
    protected $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function execute(AddUsersRequest $request)
    {
        $nama = $request->getNama();
        $email = $request->getEmail();
        $password = $request->getPassword();
        $usersType = $request->getUsersType();
        try {
            $response = $this->usersRepository->save($nama, $email, $password, $usersType);
            return new AddUsersResponse('User registration successful.');
        }
        catch (\Exception $exception){
            return new AddUsersResponse($exception->getMessage(), TRUE);
        }
    }
}