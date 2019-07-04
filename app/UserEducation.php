<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    //
    protected $fillable=[

        'user_id',
        'xth_percentage',
        'xiith_percentage',
        'graduation_percentage'
    ];
}
