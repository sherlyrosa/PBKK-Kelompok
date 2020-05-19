<?php

namespace Its\Example\Dashboard\Core\Application\Service\ViewAllPengajuan;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;

class ViewAllPengajuanService
{
    protected $lesRepository;

    public function __construct(LesRepository $lesRepository)
    {
        $this->lesRepository = $lesRepository;
    }

    public function execute()
    {
        return $this->lesRepository->allPengajuan();
    }
}