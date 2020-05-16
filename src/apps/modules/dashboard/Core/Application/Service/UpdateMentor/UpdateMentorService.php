<?php

namespace Its\Example\Dashboard\Core\Application\Service\UpdateMentor;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class UpdateMentorService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function execute(UpdateMentorRequest $request)
    {
        $idm = $request->getId();
        $nama = $request->getNama();
        $jadwal = $request->getJadwal();
        $matpel = $request->getMatpel();
        $pengalaman = $request->getPengalaman();

        try{
            $this->mentorRepository->update($idm, $nama, $jadwal, $matpel, $pengalaman);
            return new UpdateMentorResponse('Update mentor successful.');
        }
        catch (\Exception $exception) {
            return new UpdateMentorResponse($exception->getMessage(), TRUE);
        }
    }
}