<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\User;
use App\LoaiVB;
use App\VanBan;
use App\FileVB;

class GoiNhanVanBanController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');

      $nguoiki = User::orderby('name','asc')->get();
      view()->share('nguoiki',$nguoiki);

      $loaivb = LoaiVB::orderby('id','asc')->get();
      view()->share('loaivb',$loaivb);

      $vanban = VanBan::orderby('id','desc')->get();
      view()->share('vanban',$vanban);

      $filevb = FileVB::orderby('id','asc')->get();
      view()->share('filevb',$filevb);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('goinhanvanban.home');
  }

  public function getTaoMoiVanBan()
  {
      return view('goinhanvanban.taomoi');
  }

  public function postTaoMoiVanBan(Request $request)
  {
      $vb = new VanBan;

      $vb->loaivb_id = $request->loaivb_id;
      $vb->kihieu = $request->kihieu;
      $vb->ngayki = $request->ngayki;
      $vb->nguoiki_id = $request->nguoiki_id;
      $vb->ngaybanhanh = $request->ngaybanhanh;
      $vb->trichyeu = $request->trichyeu;
      $vb->ghichu = $request->ghichu;

      $vb->save();

      $vb_id = VanBan::all()->last()->id;

      //Them cong viec vao XuLy

      $files = $request->file('filevb');

    	if(!empty($files)){

    		foreach($files as $file){
    			//Storage::put($file->getClientOriginalName(), file_get_contents($file));

          $name = $file->getClientOriginalName();

          $tenfile = str_random(4)."_".$name;

          while (file_exists("upload/filevb/".$tenfile)){

            $tenfile = str_random(4)."_name";

          }

          // Storage::put($tenfile, file_get_contents($file));

          $file->move("upload/filevb",$tenfile);

          $fvb = new FileVB;
            $fvb->filevb = $tenfile;
            $fvb->vanban_id = $vb_id;
          $fvb->save();
    		}

    	}

      return redirect('van-thu');
  }

  public function deleteVanBan(Request $request, $id)
  {
    $vb = VanBan::find($id);
    $vb->delete();

    return redirect('van-thu');
  }



}
