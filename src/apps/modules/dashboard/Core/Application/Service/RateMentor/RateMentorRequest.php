<?php

namespace Its\Example\Dashboard\Core\Application\Service\RateMentor;

class RateMentorRequest
{
    protected $idm;
    protected $reviewCnt;
    protected $reviewVal;

    public function __construct($idm, $reviewCnt, $reviewVal)
    {
        $this->idm = $idm;
        $this->reviewCnt = $reviewCnt;
        $this->reviewVal = $reviewVal;
    }

    public function getIdm()
    {
        return $this->idm;
    }

    public function getReviewCnt()
    {
        return $this->reviewCnt;
    }

    public function getReviewVal()
    {
        return $this->reviewVal;
    }
}