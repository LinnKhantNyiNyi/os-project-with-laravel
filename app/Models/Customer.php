<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
     protected $guarded = [];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

}
