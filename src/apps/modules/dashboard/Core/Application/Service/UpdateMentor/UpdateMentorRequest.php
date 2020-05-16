<?php

namespace Its\Example\Dashboard\Core\Application\Service\UpdateMentor;

class UpdateMentorRequest
{
    protected $idm;
    protected $nama;
    protected $jadwal;
    protected $matpel;
    protected $pengalaman;

    public function __construct($idm, $nama, $jadwal, $matpel, $pengalaman)
    {
        $this->idm = $idm;
        $this->nama = $nama;
        $this->jadwal = $jadwal;
        $this->matpel = $matpel;
        $this->pengalaman = $pengalaman;
    }

    public function getId()
    {
        return  $this->idm;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getJadwal()
    {
        return $this->jadwal;
    }

    public function getMatpel()
    {
        return $this->matpel;
    }

    public function getPengalaman()
    {
        return $this->pengalaman;
    }
}