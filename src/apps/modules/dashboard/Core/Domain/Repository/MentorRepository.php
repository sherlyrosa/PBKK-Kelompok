<?php

namespace Its\Example\Dashboard\Core\Domain\Repository;

use Its\Example\Dashboard\Core\Domain\Model\Mentor;

interface MentorRepository
{
    public function save($nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto);
    public function allMentor() : ?array;
    public function update($idm, $nama, $jadwal, $matpel, $pengalaman);
    public function delete($idm);
    public function findById($idm) : Mentor;
}