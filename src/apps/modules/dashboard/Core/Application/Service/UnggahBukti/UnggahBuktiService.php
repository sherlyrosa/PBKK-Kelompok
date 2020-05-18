<?php

namespace Its\Example\Dashboard\Core\Application\Service\UnggahBukti;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class UnggahBuktiService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute(UnggahBuktiRequest $request)
    {
        $idm = $request->getId();
        $email = $request->getEmail();
        $bukti = $request->getBukti();

        try {
            $this->lesRepository->unggah($idm, $email, $bukti);
            return new UnggahBuktiResponse('Unggah berhasil.');
        }
        catch (\Exception $e) {
            return new UnggahBuktiResponse($e->getMessage(), TRUE);
        }
    }
}