<?php

namespace Its\Example\Dashboard\Core\Domain\Model;

class Pengajuan_les
{
    private $idm;
    private $email;
    private $matpel;
    private $jadwal;
    private $statusBayar;

    public function __construct($idm, $email, $matpel, $jadwal, $statusBayar)
    {
        $this->idm = $idm;
        $this->email = $email;
        $this->matpel = $matpel;
        $this->jadwal = $jadwal;
        $this->statusBayar = $statusBayar;
    }

    public function getIdm()
    {
        return $this->idm;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMatpel()
    {
        return $this->matpel;
    }

    public function getJadwal()
    {
        return $this->jadwal;
    }

    public function getStatusBayar()
    {
        return $this->statusBayar;
    }
}