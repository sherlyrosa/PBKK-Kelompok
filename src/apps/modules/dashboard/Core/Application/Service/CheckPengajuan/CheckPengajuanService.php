<?php

namespace Its\Example\Dashboard\Core\Application\Service\CheckPengajuan;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class CheckPengajuanService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute($email)
    {
        return $this->lesRepository->find($email);
    }
}