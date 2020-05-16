<?php

namespace Its\Example\Dashboard\Core\Application\Service\FindMentorById;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class FindMentorByIdService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function execute($idm)
    {
        try {
            $user = $this->mentorRepository->findById($idm);
            if(!$user->isExist())
            {
                throw new \Exception('User not found.');
            }
        }
        catch(\Exception $exception) {
            throw new \Exception();
        }

        return $user;
    }
}