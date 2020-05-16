<?php

namespace Its\Example\Dashboard\Infrastructure\Persistence;

use Its\Example\Dashboard\Core\Domain\Repository\LesRepository;
use Its\Example\Dashboard\Core\Domain\Model\Pengajuan_les;

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
        $sql = "SELECT * FROM Pengajuan_les WHERE statusBayar = '0'";

        $result = $this->db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
        $resultArray = array();

        if($result)
        {
            foreach($result as $row)
            {
                $pengajuan_les = new Pengajuan_les(
                    $row['idm'],
                    $row['email'],
                    $row['matpel'],
                    $row['jadwal'],
                    $row['statusBayar']
                );

                array_push($resultArray, $pengajuan_les);
            }
        }

        return $resultArray;
    }
}