<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuyenHan extends Model
{
  protected $table = 'quyenhan';

  public function user()
  {
    return $this->hasMany('App\User','quyenhan_id','id');
  }  
}
