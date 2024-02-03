<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $timestamps = false;
    use HasFactory;
    // // public function post()
    // // {
    //     return $this->belongsTo(Post::class.'post_id');
    // // }
}