<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        
    }

    public function signUpAction()
    {
        if($this->request->isPost())
        {
            $nama = $this->request->getPost('nama');
            $nohp = $this->request->getPost('nohp');
            $alamat = $this->request->getPost('alamat');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
        }
    }

    public function signInAction()
    {
        if($this->request->isPost())
        {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
        }
    }

    public function homeAction()
    {

    }

    public function submissionAction()
    {

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
}