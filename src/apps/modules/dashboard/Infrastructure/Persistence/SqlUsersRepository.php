<?php

namespace Its\Example\Dashboard\Infrastructure\Persistence;

use Phalcon\DI;
use Its\Example\Dashboard\Core\Domain\Model\Users;
use Its\Example\Dashboard\Core\Domain\Repository\UsersRepository;

class SqlUsersRepository implements UsersRepository
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findByEmail($email, $password, $usersType) : Users
    {
        $sql = "SELECT nama, email, password, umur, jk, alamat, nohp, usersType
                FROM Users
                WHERE email = :email and password = :password and usersType = :usersType";

        $result = $this->db->fetchOne($sql, \Phalcon\Db\enum::FETCH_ASSOC, [
            'email' => $email,
            'password' => $password,
            'usersType' => $usersType
        ]);
        
        $users = new Users(
            $result['nama'],
            $result['email'],
            $result['password'],
            $result['umur'],
            $result['jk'],
            $result['alamat'],
            $result['nohp'],
            $result['usersType']
        );

        return $users;

    }

    public function save($nama, $email, $password, $usersType)
    {
        $sql = "INSERT INTO Users(nama, email, password, usersType) VALUES (:nama, :email, :password, :usersType)";

        $this->db->query($sql, [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'usersType' => $usersType
        ]);
    }
}