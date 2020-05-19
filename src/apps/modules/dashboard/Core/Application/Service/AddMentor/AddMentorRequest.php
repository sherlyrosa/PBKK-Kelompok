<?php

namespace Its\Example\Dashboard\Core\Application\Service\AddMentor;

class AddMentorRequest
{
    protected $nama;
    protected $jadwal;
    protected $matpel;
    protected $pengalaman;
    protected $reviewCnt;
    protected $reviewVal;
    protected $foto;

    public function __construct($nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto)
    {
        $this->nama = $nama;
        $this->jadwal = $jadwal;
        $this->matpel = $matpel;
        $this->pengalaman = $pengalaman;
        $this->reviewCnt = $reviewCnt;
        $this->reviewVal = $reviewVal;
        $this->foto = $foto;
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

    public function getReviewCnt()
    {
        return $this->reviewCnt;
    }

    public function getReviewVal()
    {
        return $this->reviewVal;
    }

    public function getFoto()
    {
        return $this->foto;
    }
}