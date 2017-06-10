<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
     protected $table = 'result';
 
 public function user()
    {
        return $this->belongsTo('App\User');
    }
}
