<?php

namespace Its\Example\Dashboard\Core\Application\Service\ViewAllMentor;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class ViewAllMentorService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function allMentor()
    {
        return $this->mentorRepository->allMentor();
    }
}