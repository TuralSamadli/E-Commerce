<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
//    protected $fillable = ['name','slug','icon'];
    protected $guarded = ['id'];
    public $timestamps = false;
//    protected $primaryKey = 'id_category';
}
