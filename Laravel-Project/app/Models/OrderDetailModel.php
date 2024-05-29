<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Product;
use ProductModel;

class OrderDetailModel extends Model
{
    use HasFactory;
    protected $table ='tblOderDetail';
    public function belongtoOder(){
        return $this->belongsTo(OrderModel::class,'oid','odid');
    }
    public function belongtoProduct(){
        return $this->belongsTo(ProductModel::class,'pid','odid');
    }
    
}
