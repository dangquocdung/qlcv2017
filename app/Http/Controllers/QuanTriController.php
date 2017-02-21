<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\QuyenHan;

class QuanTriController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');


      $nguoidung = User::orderby('id','asc')->get();
      view()->share('nguoidung',$nguoidung);

      $quyenhan = QuyenHan::orderby('id','asc')->get();
      view()->share('quyenhan',$quyenhan);

  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('quantri.home');
  }

  public function putNguoiDung(Request $request, $id)
  {
    $usr = User::find($id);
    $usr->quyenhan_id = $request->quyenhan_id;
    $usr->save();

    return redirect('/quan-tri');
  }


}
