<?php

namespace Its\Example\Dashboard\Core\Application\Service\Pengajuan;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class PengajuanService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute($idm, $email)
    {
        try {
            $this->lesRepository->pengajuan($idm, $email);
            return new PengajuanResponse('Pengajuan Berhasil.');
        }
        catch (\Exception $e){
            return new PengajuanResponse($e->getMessage(), TRUE);
        }
    }
}