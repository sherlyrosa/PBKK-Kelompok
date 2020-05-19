<?php

namespace Its\Example\Dashboard\Core\Application\Service\RateMentor;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class RateMentorService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function execute(RateMentorRequest $request)
    {
        $idm = $request->getIdm();
        $reviewCnt = $request->getReviewCnt();
        $reviewVal = $request->getReviewVal();

        try {
            $this->mentorRepository->rate($idm, $reviewCnt, $reviewVal);
            return new RateMentorResponse('Rate Berhasil.');
        }
        catch(\Exception $e) {
            return new RateMentorResponse($e->getMessage(), TRUE);
        }
    }
}