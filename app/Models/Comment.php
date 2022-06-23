<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

     public function customer(){
        return $this->belongsTo(customer::class,'user_id');
    }
     public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
