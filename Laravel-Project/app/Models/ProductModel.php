<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysqli;

class ProductModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "tblProduct";

    public function hasOrderDetail(){
        return $this->hasMany(OrderDetailModel::class,'pid','odid');
    }

}
