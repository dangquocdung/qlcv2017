<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoSoCongViecController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('hosocongviec.home');
  }

  public function getTaoMoiHSCV()
  {
      return view('hosocongviec.taomoi');
  }
}
