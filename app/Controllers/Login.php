<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('Login');
	}

    public function verif()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if ($email=="rahmadhillaintan@gmail.com" && $password=="webtucil") 
        {
            return redirect()->to('/Home');
        }
        else{
            return redirect()->to('/Login');
        }
    }

}