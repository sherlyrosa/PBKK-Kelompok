<?php

namespace Its\Example\Dashboard\Core\Domain\Repository;

use Its\Example\Dashboard\Core\Domain\Model\Pengajuan_les;

interface LesRepository
{
    public function verifikasiBayardanLes($idm, $email);
    public function allPengajuan() : array;
    public function pengajuan($idm, $email);
    public function unggah($idm, $email, $bukti);
    public function find($email) : ?Pengajuan_les;
    public function riwayat($email) : array;
}