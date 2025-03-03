<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';

    public function user(){
        return $this->belongsTo(User::class, 'id_use');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'id_cat');
    }
}
