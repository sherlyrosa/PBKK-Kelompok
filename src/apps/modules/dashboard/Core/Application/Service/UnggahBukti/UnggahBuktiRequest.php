<?php

namespace Its\Example\Dashboard\Core\Application\Service\UnggahBukti;

class UnggahBuktiRequest
{
    protected $idm;
    protected $email;
    protected $bukti;

    public function __construct($idm, $email, $bukti)
    {
        $this->idm = $idm;
        $this->email = $email;
        $this->bukti = $bukti;
    }

    public function getId()
    {
        return $this->idm;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getBukti()
    {
        return $this->bukti;
    }
}