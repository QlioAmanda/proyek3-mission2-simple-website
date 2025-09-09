<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));

        $user = $userModel->where('username', $username)
                          ->where('password', $password)
                          ->first();

        if ($user) {
            $session->set([
                'username' => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/home');
        } else {
            $session->setFlashdata('error', 'Username atau Password salah!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
