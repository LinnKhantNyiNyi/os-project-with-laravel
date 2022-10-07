<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,"product_id");
    }

    public function shopkeeper(){
        return $this->belongsTo(Admin::class,'admin_id');
    }
}
