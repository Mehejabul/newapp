<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'postcate_name',
        'postcate_remarks',
        'postcate_url',
        'postcate_creator',
        'postcate_editor',
        'postcate_slug',
    ];

    public function categorytopost(){

     return this->belongsToMany(App\Models\Post::class);
 }


}
