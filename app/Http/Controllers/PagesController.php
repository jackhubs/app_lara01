<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    
     public function about()
    {
        return view('pages.about');
    }
     public function service()
    {
        return view('pages.service');
    }
    
}
