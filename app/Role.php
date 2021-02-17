<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Role extends Model
{
    use Sluggable;

    // Slug the name 
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $table = 'roles';

    protected $guarded = [];

    // Each category has many articles(many to many)
    public function users(){
        return $this->belongsToMany(user::class);
    }
}
