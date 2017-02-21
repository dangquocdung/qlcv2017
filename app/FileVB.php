<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileVB extends Model
{
  protected $table = 'filevb';

  public function vanban()
  {
    return $this->belongTo('App\VanBan','vanban_id','id');
  }
}
