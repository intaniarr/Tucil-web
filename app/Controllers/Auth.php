<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function admin()
	{
		return view('Admin');
    }
    
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
            return redirect()->to('/Auth/admin');
        }
        else{
            return redirect()->to('/Auth');
        }
    }

    public function register()
	{
		return view('Register');
    }
    

}
