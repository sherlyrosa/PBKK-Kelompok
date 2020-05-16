<?php

namespace Its\Example\Dashboard\Core\Application\Service\VerifikasiBayardanLes;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class VerifikasiBayardanLesService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute(VerfikasiBayardanLesRequest $request)
    {
        $idm = $request->getIdm();
        $email = $request->getEmail();

        try {
            $this->lesRepository->verifikasiBayardanLes($idm, $email);
            return new VerifikasiBayardanLesResponse('Verifikasi berhasil.');
        }
        catch(\Exception $exception) {
            return new VerifikasiBayardanLesResponse($exception->getMessage(), TRUE);
        }
    }
}