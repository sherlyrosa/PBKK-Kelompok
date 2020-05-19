<?php

namespace Its\Example\Dashboard\Core\Application\Service\VerifikasiBayardanLes;

class VerifikasiBayardanLesRequest
{
    protected $idm;
    protected $email;

    public function __construct($idm, $email)
    {
        $this->idm = $idm;
        $this->email = $email;
    }

    public function getIdm()
    {
        return $this->idm;
    }

    public function getEmail()
    {
        return $this->email;
    }
}