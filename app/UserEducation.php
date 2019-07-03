<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    //
    protected $fillable=[

        'user_id',
        '10th_percentage',
        '12th_percentage',
        'graduation_percentage'
    ];
}
