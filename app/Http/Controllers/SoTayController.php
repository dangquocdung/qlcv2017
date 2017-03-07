<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SoTay;

class SoTayController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');


  }


  public function index()
  {
    $ghichu = SoTay::orderby('id','desc')->get();

    return view('quantri.sotay',['ghichu'=>$ghichu]);
  }


  public function postThemGhiChu(Request $request)
  {
    $gc = new SoTay;

    $gc->nguoitao = Auth::user()->id;

    $gc->tieude = $request->tieude;
    $gc->diadiem = $request->diadiem;
    $gc->noidung = $request->noidung;

    if ($request->hasfile('tepdinhkem')){

      $file = $request->file('tepdinhkem');

      $name = $file->getClientOriginalName();

      $tdk = str_random(4)."_".$name;

      while (file_exists("upload/sotay/".$tdk)){
        $tdk = str_random(4)."_name";
      }

      $file->move("upload/sotay",$tdk);

      $gc->tepdinhkem = $tdk;

    }else{

      $gc->tepdinhkem = "";

    }

    $gc->save();

    return redirect('so-tay');

  }

  public function putGhiChu(Request $request, $id)
  {
      $gc = SoTay::find($id);

      $gc->tieude = $request->tieude;
      $gc->diadiem = $request->diadiem;
      $gc->noidung = $request->noidung;

      if ($request->hasfile('tepdinhkem')){

        $file = $request->file('tepdinhkem');

        $name = $file->getClientOriginalName();

        $tdk = str_random(4)."_".$name;

        while (file_exists("upload/sotay/".$tdk)){
          $tdk = str_random(4)."_name";
        }

        $file->move("upload/sotay",$tdk);

        $gc->tepdinhkem = $tdk;

      }

      $gc->save();
      return redirect('so-tay');
  }


  public function deleteGhiChu($id)
  {
      $gc = SoTay::find($id);
      $gc->delete();
      return redirect('so-tay');
  }

}
