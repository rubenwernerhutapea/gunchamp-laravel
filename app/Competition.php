<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competition extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'name', 'poster', 'description', 'registration_period', 'registration_fee', 'registration_link', 'categories', 'slug'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
