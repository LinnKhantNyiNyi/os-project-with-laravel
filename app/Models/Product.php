<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $guarded = [];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');

    }

public function category(){
        return $this->belongsTo(Catrgory::class,'category_id');

    }

public function comment(){
    return $this->hasMany(Comment::class);
}

public function order(){
    return $this->hasMany(Order::class);
}

}
