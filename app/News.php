<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'title', 'description', 'body', 'source', 'image','created_at', 'updated_at'
    ];
}
