<?php

namespace Its\Example\Dashboard\Infrastructure\Persistence;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;
use Its\Example\Dashboard\Core\Domain\Model\Pengajuan_les;
use Its\Example\Dashboard\Core\Domain\Model\Mentor;

class SqlLesRepository implements LesRepository
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function verifikasiBayardanLes($idm, $email)
    {
        $sql = "UPDATE Pengajuan_les
                SET statusBayar = '1'
                WHERE idm = :idm and email = :email";

        $this->db->query($sql,[
            'idm' => $idm,
            'email' => $email
        ]);
    }

    public function allPengajuan() :array
    {
        $sql = "SELECT * FROM Pengajuan_les WHERE statusBayar = '0' and unggah = '1'";

        $result = $this->db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
        $resultArray = array();

        if($result)
        {
            foreach($result as $row)
            {
                $pengajuan_les = new Pengajuan_les(
                    $row['idm'],
                    $row['email'],
                    $row['statusBayar'],
                    $row['unggah'],
                    $row['bukti']
                );

                array_push($resultArray, $pengajuan_les);
            }
        }

        return $resultArray;
    }

    public function pengajuan($idm, $email)
    {
        $sql = "INSERT INTO Pengajuan_les(idm, email, statusBayar, unggah) VALUES (:idm, :email, '0', '0')";

        $this->db->query($sql, [
            'idm' => $idm,
            'email' => $email
        ]);
    }

    public function unggah($idm, $email, $bukti)
    {
        $sql = "UPDATE Pengajuan_les
                SET unggah = '1', bukti = :bukti
                WHERE unggah = '0' and idm = :idm and email = :email";

        $this->db->query($sql, [
            'idm' => $idm,
            'email' => $email,
            'bukti' => $bukti
        ]);
    }

    public function find($email):?Pengajuan_les
    {
        $sql = "SELECT * FROM Pengajuan_les
                WHERE email = :email and unggah = '0'";
        
        $result = $this->db->fetchOne($sql, \Phalcon\Db\enum::FETCH_ASSOC, [
            'email' => $email
        ]);

        if($result)
        {
            $pengajuan = new Pengajuan_les(
                $result['idm'],
                $result['email'],
                $result['statusBayar'],
                $result['unggah'],
                $result['bukti']
            );

            return $pengajuan;
        }

        return NULL;
    }

    public function riwayat($email): array
    {
        $sql = "SELECT * FROM mentor
                INNER JOIN pengajuan_les
                ON mentor.idm = pengajuan_les.idm
                WHERE email = :email and statusBayar = '1'";
        $result = $this->db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC, [
            'email' => $email
        ]);


        $resultArray = array();
        foreach($result as $row)
        {
            $mentor = new Mentor(
                $row['idm'],
                $row['nama'],
                $row['jadwal'],
                $row['matpel'],
                $row['pengalaman'],
                $row['reviewCnt'],
                $row['reviewVal'],
                $row['foto']
            );

            array_push($resultArray, $mentor);
        }

        return $resultArray;
    }
}