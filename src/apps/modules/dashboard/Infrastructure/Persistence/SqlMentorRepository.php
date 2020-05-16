<?php

namespace Its\Example\Dashboard\Infrastructure\Persistence;

use Its\Example\Dashboard\Core\Domain\Model\Mentor;
use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class SqlMentorRepository implements MentorRepository
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function save($nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto)
    {
        $sql = "INSERT INTO Mentor(nama, jadwal, matpel, pengalaman, reviewCnt, reviewVal, foto) VALUES(:nama, :jadwal, :matpel, :pengalaman, :reviewCnt, :reviewVal, :foto)";

        $this->db->query($sql, [
            'nama' => $nama,
            'jadwal' => $jadwal,
            'matpel' => $matpel,
            'pengalaman' => $pengalaman,
            'reviewCnt' => $reviewCnt,
            'reviewVal' => $reviewVal,
            'foto' => $foto
        ]);
    }

    public function allMentor() : ?array
    {
        $sql = "SELECT * FROM Mentor";

        $result = $this->db->fetchAll($sql, \Phalcon\Db\enum::FETCH_ASSOC);
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

    public function update($idm, $nama, $jadwal, $matpel, $pengalaman)
    {
        $sql = "UPDATE Mentor
                SET nama = :nama, jadwal = :jadwal, matpel = :matpel, pengalaman = :pengalaman
                WHERE idm = :idm";
        
        $this->db->query($sql, [
            'nama' => $nama,
            'jadwal' => $jadwal,
            'matpel' => $matpel,
            'pengalaman' => $pengalaman,
            'idm' => $idm
        ]);
    }

    public function delete($idm)
    {
        $sql = "DELETE FROM Mentor WHERE idm=:idm";

        $this->db->query($sql, [
            'idm' => $idm,
        ]);
    }

    public function findById($idm) : Mentor
    {
        $sql = "SELECT * FROM Mentor WHERE idm = :idm";

        $result = $this->db->fetchOne($sql, \Phalcon\Db\enum::FETCH_ASSOC, [
            'idm' => $idm
        ]);

        $mentor = new Mentor(
            $result['idm'],
            $result['nama'],
            $result['jadwal'],
            $result['matpel'],
            $result['pengalaman'],
            $result['reviewCnt'],
            $result['reviewVal'],
            $result['foto']
        );

        return $mentor;
    }
}