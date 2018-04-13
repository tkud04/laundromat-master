<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address', 'company', 'city', 'state', 'zip', 'country'
    ];
}
