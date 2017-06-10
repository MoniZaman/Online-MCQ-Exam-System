<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category_list';
    protected $fillable = [
        'category_name',
    ];
}
