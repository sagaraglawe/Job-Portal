<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    //
    protected $fillable=[

        'user_id',
        'years'
    ];
}
