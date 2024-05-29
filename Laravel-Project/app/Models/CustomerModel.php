<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table ='tblCustomer';
    public function hasOrder(){
        return $this->hasMany(OrderModel::class,'cid','oid');
    }
}
