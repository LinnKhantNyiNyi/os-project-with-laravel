<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $guarded = [];

public function scopeFilter($query,$filter){
       $query->when($filter['search'] ??  false , function($query,$search){
            $query->where('name','LIKE','%'.$search.'%')
                  ->orWhereHas('category',function($query) use($search){
                        $query->where("name",'LIKE','%'.$search.'%');
                    });
           });

            $query->when($filter['category'] ?? false, function($query,$dropsearch){
              $query->whereHas('category',function($query) use($dropsearch){
                 $query->where('name',$dropsearch);
              });
        });
}







//--------------------------relationships--------------------------//

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');

    }

public function category(){
        return $this->belongsTo(Category::class,'category_id');

    }

public function comment(){
    return $this->hasMany(Comment::class);
}

public function order(){
    return $this->hasMany(Order::class);
}

}
