<?php

namespace Its\Example\Dashboard\Core\Application\Service\AddMentor;

use Its\Example\Dashboard\Core\Domain\Repository\MentorRepository;

class AddMentorService
{
    protected $mentorRepository;

    public function __construct(MentorRepository $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    public function execute(AddMentorRequest $request)
    {
        $nama = $request->getNama();
        $jadwal = $request->getJadwal();
        $matpel = $request->getMatpel();
        $pengalaman = $request->getPengalaman();
        $reviewCnt = $request->getReviewCnt();
        $reviewVal = $request->getReviewVal();
        $foto = $request->getFoto();
        try {
            $response = $this->mentorRepository->save($nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto);
            return new AddMentorResponse('Add mentor successful.');
        }
        catch (\Exception $exception){
            return new AddMentorResponse($exception->getMessage(), TRUE);
        }
    }
}