<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('Home');
    }
    
    public function detail()
	{
		return view('Detail');
	}
    public function about()
	{
		return view('About');
    }
    
    public function detail2()
    {
        return view('Detail2');
    }

    public function detail3()
    {
        return view('Detail3');
    }

    public function detail4()
    {
        return view('Detail4');
    }

    public function detail5()
    {
        return view('Detail5');
    }

}
