<?php

namespace Its\Example\Dashboard\Core\Domain\Repository;

interface LesRepository
{
    public function verifikasiBayardanLes($idm, $email);
    public function allPengajuan() : array;
}