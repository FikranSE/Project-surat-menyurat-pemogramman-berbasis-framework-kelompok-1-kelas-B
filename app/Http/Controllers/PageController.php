<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
  public function index()
  {
      return view('pages.dashboard');
  }
  public function signin()
  {
      return view('pages.signin');
  }
  public function signup()
  {
      return view('pages.signup');
  }
  public function suratmasuk()
  {
      return view('pages.suratmasuk');
  }
  public function suratkeluar()
  {
      return view('pages.suratkeluar');
  }
}