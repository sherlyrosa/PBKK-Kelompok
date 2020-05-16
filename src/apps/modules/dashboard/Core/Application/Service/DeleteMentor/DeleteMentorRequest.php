<?php

namespace Its\Example\Dashboard\Core\Application\Service\DeleteMentor;

class DeleteMentorRequest
{
    protected $idm;

    public function __construct($idm)
    {
        $this->idm = $idm;
    }

    public function getId()
    {
        return $this->idm;
    }
}