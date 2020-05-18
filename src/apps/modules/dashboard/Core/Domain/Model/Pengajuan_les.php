<?php

namespace Its\Example\Dashboard\Core\Domain\Model;

class Pengajuan_les
{
    private $idm;
    private $email;
    private $statusBayar;
    private $unggah;
    private $bukti;

    public function __construct($idm, $email, $statusBayar, $unggah, $bukti)
    {
        $this->idm = $idm;
        $this->email = $email;
        $this->statusBayar = $statusBayar;
        $this->unggah = $unggah;
        $this->bukti = $bukti;
    }

    public function getIdm()
    {
        return $this->idm;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getStatusBayar()
    {
        return $this->statusBayar;
    }

    public function getUnggah()
    {
        return $this->unggah;
    }

    public function getBukti()
    {
        return $this->bukti;
    }
}