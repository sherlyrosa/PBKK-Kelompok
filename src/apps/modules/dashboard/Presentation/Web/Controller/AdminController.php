<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Its\Example\Dashboard\Core\Domain\Model\Users;
use Its\Example\Dashboard\Core\Domain\Model\Mentor;
use Its\Example\Dashboard\Core\Application\Service\Login\LoginRequest;
use Its\Example\Dashboard\Core\Application\Service\AddUsers\AddUsersRequest;
use Its\Example\Dashboard\Core\Application\Service\AddMentor\AddMentorRequest;
use Its\Example\Dashboard\Core\Application\Service\DeleteMentor\DeleteMentorRequest;
use Its\Example\Dashboard\Core\Application\Service\UpdateMentor\UpdateMentorRequest;
use Its\Example\Dashboard\Core\Application\Service\VerifikasiBayardanLes\VerifikasiBayardanLesRequest;
use Phalcon\Mvc\Controller;

class AdminController extends Controller
{
    protected $loginService;
    protected $addUsersService;
    protected $addMentorService;
    protected $viewAllMentorService;
    protected $deleteMentorService;
    protected $findMentorByIdService;
    protected $updateMentorService;
    protected $verifikasiBayardanLesService;
    protected $viewAllPengajuanService;

    public function initialize()
    {
        $this->loginService = $this->getDI()->get('loginService');
        $this->addUsersService = $this->getDI()->get('addUsersService');
        $this->addMentorService = $this->getDI()->get('addMentorService');
        $this->viewAllMentorService = $this->getDI()->get('viewAllMentorService');
        $this->deleteMentorService = $this->getDI()->get('deleteMentorService');
        $this->findMentorByIdService = $this->getDI()->get('findMentorByIdService');
        $this->updateMentorService = $this->getDI()->get('updateMentorService');
        $this->verifikasiBayardanLesService = $this->getDI()->get('verifikasiBayardanLesService');
        $this->viewAllPengajuanService = $this->getDI()->get('viewAllPengajuanService');
    }

    public function indexAction()
    {

    }

    public function registerAction()
    {
        if($this->request->isPost())
        {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $usersType = 1;
            $response = $this->addUsersService->execute(new AddUsersRequest($nama, $email, $password, $usersType));
            if($response->getError())
            {
                return $this->response->redirect($this->request->getHTTPReferer());
            }
            else
            {
                return $this->response->redirect('dashboard/admin');
            }
        }
    }

    public function loginAction()
    {
        if($this->request->isPost())
        {
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $usersType = 1;
            $response = $this->loginService->execute(new LoginRequest($email, $password, $usersType));
            if($response->getError())
            {
                return $this->response->redirect($this->request->getHTTPReferer());
            }
            else
            {
                $this->session->set('auth', [
                    'email' => $response->getData()->getEmail()
                ]);
                return $this->response->redirect('dashboard/admin/home');
            }
        }
    }

    public function homeAction()
    {
        if(!$this->session->has('auth')) return $this->response->redirect('dashboard/admin');
    }

    public function logoutAction()
    {
        // echo $this->session->get('auth');
        $this->session->remove('auth');
        return $this->response->redirect('dashboard/admin');
    }

    public function mentorAction()
    {
        $mentor = $this->viewAllMentorService->allMentor();
        $this->view->setVar('mentor', $mentor);
    }

    public function tambahmentorAction()
    {
        if($this->request->isPost())
        {
            $nama = $this->request->getPost('Nama');
            $jadwalTemp = $this->request->getPost('jadwal');
            $jadwal = "";
            foreach($jadwalTemp as $val)
            {
                $jadwal = $jadwal . $val;
            }
            $matpel = "";
            $matpelTemp = $this->request->getPost('mapel');
            foreach($matpelTemp as $val)
            {
                $matpel = $matpel . $val;
            }
            $pengalaman = $this->request->getPost('Pengalaman');
            $reviewCnt = $this->request->getPost('TotalPereview');
            $reviewVal = $this->request->getPost('Review');
            if($this->request->hasFiles() == true)
            {
                $baseLocation = 'files/';
                foreach ($this->request->getUploadedFiles() as $file)
                {
                    $foto = $baseLocation . $file->getName();
                    $file->moveTo($foto);
                }
            }

            $response = $this->addMentorService->execute(new AddMentorRequest($nama, $jadwal, $matpel, $pengalaman, $reviewCnt, $reviewVal, $foto));
            if($response->getError())
            {
                return $this->response->redirect($this->request->getHTTPReferer());
            }
            else
            {
                return $this->response->redirect('dashboard/admin/mentor');
            }
        }
    }

    public function editmentorAction()
    {
        $idm = $this->request->getPost('edit');
        try {
            $mentor = $this->findMentorByIdService->execute($idm);
            $this->view->setVar('dataMentor', $mentor);
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function editmentorpostAction()
    {
        if($this->request->isPost())
        {
            $idm = $this->request->getPost('idm');
            $nama = $this->request->getPost('nama');
            $jadwalTemp = $this->request->getPost('jadwal');
            $jadwal = "";
            foreach($jadwalTemp as $val)
            {
                $jadwal = $jadwal . $val;
            }
            $matpel = "";
            $matpelTemp = $this->request->getPost('mapel');
            foreach($matpelTemp as $val)
            {
                $matpel = $matpel . $val;
            }
            $pengalaman = $this->request->getPost('pengalaman');

            $response = $this->updateMentorService->execute(new UpdateMentorRequest($idm, $nama, $jadwal, $matpel, $pengalaman));
            if($response->getError())
            {
                return $this->response->redirect($this->request->getHTTPReferer());
            }
            else 
            {
                return $this->response->redirect('dashboard/admin/mentor');
            }
        }
    }

    public function mentordeleteAction()
    {
        $idm = $this->request->getPost('delete');
        $response = $this->deleteMentorService->execute(new DeleteMentorRequest($idm));
        if($response->getError())
        {
            return $this->response->redirect($this->request->getHTTPReferer());
        }
        else
        {
            return $this->response->redirect('dashboard/admin/mentor');
        }
    }

    public function pembayaranAction()
    {
        if($this->request->isPost())
        {
            $idm = $this->request->getPost('idm');
            $email = $this->request->getPost('email');

            $response = $this->verifikasiBayardanLesService->execute(new VerifikasiBayardanLesRequest($idm, $email));
            if($response->getError())
            {
                return $this->response->redirect($this->request->getHTTPReferer());
            }
            else
            {
                return $this->response->redirect('dashboard/admin/pembayaran');
            }
        }

        $pengajuan_les = $this->viewAllPengajuanService->execute();
        $this->view->setVar('pengajuan', $pengajuan_les);
    }
}