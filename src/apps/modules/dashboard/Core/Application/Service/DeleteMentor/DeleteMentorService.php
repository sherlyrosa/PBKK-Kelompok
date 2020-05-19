<?php

namespace Its\Example\Dashboard\Core\Application\Service\DeleteMentor;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class DeleteMentorService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function execute(DeleteMentorRequest $request)
    {
        $idm = $request->getId();
        try {
            $response = $this->mentorRepository->delete($idm);
            return new DeleteMentorResponse('Delete mentor successful');
        }
        catch(\Exception $exception) {
            return new DeleteMentorResponse($exception->getMessage(), TRUE);
        }
    }
}