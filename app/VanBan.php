<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
  protected $table = 'vanban';

  public function loaivb()
  {
    return $this->belongsTo('App\LoaiVB','loaivb_id','id');
  }


  public function nguoiki()
  {
    return $this->belongsTo('App\User','nguoiki_id','id');
  }

}
