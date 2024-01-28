<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id'
    ];
    public function Like()
    {
        return $this->hasOne(Like::class, 'id');
    }

}