<?php

namespace Its\Example\Dashboard\Core\Application\Service\UserRegister;

use Its\Example\Dashboard\Core\Domain\Repository\UsersRepository;

class UserRegisterService
{
    protected $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function execute(UserRegisterRequest $request) 
    {
        $nama = $request->getNama();
        $email =  $request->getEmail();
        $password = $request->getPassword();
        $umur = $request->getUmur();
        $jk = $request->getJk();
        $alamat = $request->getAlamat();
        $nohp = $request->getNohp();
        $usersType = $request->getUsersType();

        try {
            $this->usersRepository->register($nama, $email, $password, $umur, $jk, $alamat, $nohp, $usersType);
            return new UserRegisterResponse("Register berhasil.");
        }
        catch (\Exception $e) {
            return new UserRegisterResponse($e->getMessage(), TRUE);
        }
    }
}