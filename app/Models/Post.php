<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'user_id'
    ];

    public function user(){
        // return $this->hasOne(User::class, 'id', 'user_id');
        return $this->belongsTo(User::class);
    }


}
