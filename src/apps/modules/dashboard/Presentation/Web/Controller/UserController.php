<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;
use Its\Example\Dashboard\Core\Domain\Model\Users;
use Its\Example\Dashboard\Core\Application\Service\UserRegister\UserRegisterRequest;
use Its\Example\Dashboard\Core\Application\Service\Login\LoginRequest;
use Its\Example\Dashboard\Core\Application\Service\UnggahBukti\UnggahBuktiRequest;

class UserController extends Controller
{
    protected $userRegisterService;
    protected $loginService;
    protected $viewAllMentorService;
    protected $pengajuanService;
    protected $checkPengajuanService;
    protected $unggahBuktiService;

    public function initialize()
    {
        $this->userRegisterService = $this->getDI()->get('userRegisterService');
        $this->loginService = $this->getDI()->get('loginService');
        $this->viewAllMentorService = $this->getDI()->get('viewAllMentorService');
        $this->pengajuanService = $this->getDI()->get('pengajuanService');
        $this->checkPengajuanService = $this->getDI()->get('checkPengajuanService');
        $this->unggahBuktiService = $this->getDI()->get('unggahBuktiService');
    }

    public function indexAction()
    {
        
    }

    public function signUpAction()
    {
        if($this->request->isPost())
        {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $umur = $this->request->getPost('umur');
            $jk = $this->request->getPost('jk');
            $alamat = $this->request->getPost('alamat');
            $nohp = $this->request->getPost('nohp');
            $usersType = 0;
            
            $response = $this->userRegisterService->execute(new UserRegisterRequest($nama, $email, $password, $umur, $jk, $alamat, $nohp, $usersType));

            if($response->getError())
            {
                echo $response->getMessage();
            }
            else
            {
                return $this->response->redirect('');
            }

        }
    }

    public function signInAction()
    {
        if($this->request->isPost())
        {
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $usersType = 0;

            $response = $this->loginService->execute(new LoginRequest($email, $password, $usersType));
            if($response->getError())
            {
                echo $response->getMessage();
            }
            else
            {
                $this->session->set('user', [
                    'email' => $response->getData()->getEmail()
                ]);
                return $this->response->redirect('dashboard/user/home');
            }
        }
    }

    public function homeAction()
    {

    }

    public function submissionAction()
    {
        $checkPengajuan = $this->checkPengajuanService->execute($this->session->get('user')['email']);
        if($checkPengajuan)
        {        
            return $this->response->redirect('dashboard/user/unggah');
        }
        else
        {
            
        }
    }

    public function unggahAction()
    {
        if($this->request->isPost())
        {
            $email = $this->session->get('user')['email'];
            $idm =  $this->checkPengajuanService->execute($this->session->get('user')['email'])->getIdm();
            if($this->request->hasFiles() == true)
            {
                $baseLocation = 'files/';
                foreach ($this->request->getUploadedFiles() as $file)
                {
                    $bukti = $baseLocation . $file->getName();
                    $file->moveTo($bukti);
                }
            }

            $response = $this->unggahBuktiService->execute(new UnggahBuktiRequest($idm, $email, $bukti));
            if($response->getError())
            {
                echo $response->getMessage();
            }
            else
            {
                return $this->response->redirect('dashboard/user/submission');
            }
        }
    }

    public function contactusAction()
    {

    }

    public function howtoAction()
    {

    }

    public function mycourseAction()
    {
        
    }

    public function signOutAction()
    {
        $this->session->remove('user');
        return $this->response->redirect('');
    }

    public function pilihmentorAction()
    {
        if($this->request->isPost())
        {
            $pertemuan = $this->request->getPost('pertemuan');
            $harga = $this->request->getPost('harga');
            $mentor = $this->viewAllMentorService->allMentor();
            $this->view->setVar('pertemuan', $pertemuan);
            $this->view->setVar('harga', $harga);
            $this->view->setVar('mentors', $mentor);
        }
        else
        {
            return $this->response->redirect('dashboard/user/submission');
        }
    }

    public function jadwalAction()
    {
        if($this->request->isPost())
        {
            $idm = $this->request->getPost('idm');
            $pertemuan = $this->request->getPost('pertemuan');
            $harga = $this->request->getPost('harga');
            $mentor = $this->findMentorByIdService->execute($idm);
            $this->view->setVar('dataMentor', $mentor);
        }
        else
        {
            return $this->response->redirect('dashboard/index/submission');
        }
    }

    public function addcourseAction()
    {
        $idm = $this->request->getPost('idm');
        $email = $this->session->get('user')['email'];
        // echo $idm;
        $response = $this->pengajuanService->execute($idm, $email);
        if($response->getError())
        {
            echo $response->getMessage();
        }
        else
        {
            return $this->response->redirect('dashboard/user/submission');
        }
    }
}