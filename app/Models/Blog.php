<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image',
    ];
    //リレーション追加
    public function user() {
         return $this->belongsTo(User::class);
         }
}
