<?php

namespace Its\Example\Dashboard\Core\Domain\Model;

class Mentor
{
    private $idm;
    private $nama;
    private $jadwal;
    private $matpel;
    private $pengalaman;
    private $reviewCnt;
    private $reviewVal;
    private $foto;

    public function __construct($idm, $nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto)
    {
        $this->idm = $idm;
        $this->nama = $nama;
        $this->jadwal = $jadwal;
        $this->matpel = $matpel;
        $this->pengalaman = $pengalaman;
        $this->reviewCnt = $reviewCnt;
        $this->reviewVal = $reviewVal;
        $this->foto = $foto;
    }

    public function isExist()
    {
        return isset($this->idm);
    }

    public function getId()
    {
        return $this->idm;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getPengalaman()
    {
        return $this->pengalaman;
    }

    public function getReview()
    {
        return ($this->reviewVal / $this->reviewCnt);
    }

    public function getJadwal()
    {
        return $this->jadwal;
    }

    public function getMatpel()
    {
        return $this->matpel;
    }

    public function getLen()
    {
        return 4 + $this->getLenJadwal() + $this->getLenMatpel();
    }
    
    public function getLenJadwal()
    {
        return strlen($this->jadwal) / 2;
    }

    public function getLenMatpel()
    {
        return strlen($this->matpel);
    }

    public function listMatpel()
    {
        $list = ['Biologi', 'Fisika', 'Kimia', 'Matematika', 'IPS'];
        $listMatpel = array();
        for($i = 0; $i < $this->getLenMatpel(); $i++)
        {
            $index = intval($this->matpel[intval($i)]);
            $mata_pelajaran = $list[$index - 1];
            array_push($listMatpel, $mata_pelajaran);
        }
        return $listMatpel;
    }

    public function listHari()
    {
        $list = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $listHari = array();
        for($i = 0; $i < $this->getLenJadwal(); $i++) 
        {
            $kiri = $this->jadwal[$i * 2];
            $kanan = $this->jadwal[$i * 2 + 1];
            $nilai = intval((intval($kiri) * 10 + intval($kanan) - 1) / 3);
            if(!in_array($list[$nilai], $listHari))
            {
                array_push($listHari, $list[$nilai]);
            }
        }
        return $listHari;
    }

    public function rowCntHari($hari)
    {
        $list = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $res = 0;
        for($i = 0; $i < $this->getLenJadwal(); $i++)
        {
            $kiri = $this->jadwal[$i * 2];
            $kanan = $this->jadwal[$i * 2 + 1];
            $nilai = intval((intval($kiri) * 10 + intval($kanan) - 1) / 3);
            if($list[$nilai] == $hari)
            {
                $res++;
            }
        }
        
        return $res;
    }

    public function listJam($hari)
    {
        $list = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $listJam = ['17.00-18.00', '18.00-19.00', '19.00-20.00'];
        $listHari = array();
        for($i = 0; $i < $this->getLenJadwal(); $i++)
        {
            $kiri = $this->jadwal[$i * 2];
            $kanan = $this->jadwal[$i * 2 + 1];
            $nilai = intval((intval($kiri) * 10 + intval($kanan) - 1) / 3);
            $index = intval((intval($kiri) * 10 + intval($kanan) - 1) % 3);
            if($list[$nilai] == $hari)
            {
                array_push($listHari, $listJam[$index]);
            }
        }

        return $listHari;
    }
    public function statusMatpel($x)
    {
        for($i = 0; $i < $this->getLenMatpel(); $i++)
        {
            if($this->matpel[$i] == $x)
            {
                echo "$this->matpel[$i]";
                return true;
            }
        }
        return false;
    }

    public function statusJadwal($x)
    {
        for($i = 0; $i < $this->getLenJadwal(); $i++)
        {
            $comp = $this->jadwal[$i * 2] . $this->jadwal[$i * 2 + 1];
            if($comp == $x)
            {
                return true;
            }
        }
        return false;
    }
}