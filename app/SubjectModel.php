<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
     protected $table = 'subject';
    protected $fillable = [
        'subject',
        'category',
        'duration',
        'sub_active'
       ];
  //       public function category(){
  //   	return $this->belongsTo('App\Category');
		// }
 
}
