<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //protected $fllable['name,'details'];
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function generic(){
        return $this->belongsTo(Generic::class,"generic_id","id");
    }
}
