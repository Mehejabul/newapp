<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function postcategory(){
        return $this->belongsTo('App\Models\PostCategory', 'postcate_id', 'postcate_id');
    }

      public function creator(){
        return $this->hasOne(User::class, 'id', 'post_creator');
    }

    public function editor(){
        return $this->hasOne(User::class, 'id', 'post_editor');
    }


    // public function tags(){
    //     return $this->belongsToMany('post_tag', 'tag_id', 'post_id');
    // }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
