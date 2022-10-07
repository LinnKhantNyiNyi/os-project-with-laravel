<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];

public function product(){
    return $this->hasMany(Product::class);
}
public function comment(){
    return $this->hasMany(Comment::class);
}

public function orders(){
    return $this->hasMany(Order::class);
}

public function shop(){
    return $this->belongsTo(Shop::class,"shop_id");
}
}

