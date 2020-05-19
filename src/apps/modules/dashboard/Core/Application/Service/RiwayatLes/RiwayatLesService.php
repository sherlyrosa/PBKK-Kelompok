<?php

namespace Its\Example\Dashboard\Core\Application\Service\RiwayatLes;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class RiwayatLesService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute($email)
    {
        return $this->lesRepository->riwayat($email);
    }
}