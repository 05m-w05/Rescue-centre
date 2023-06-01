<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    public $table = "Favorites";

    public function user(){
        return $this->belongsTo(Favorites::class, "user_id", "id")->first();
    }

    public function product(){
        return $this->hasOne(Product::class, "id", "product_id")->first();
    }
}
