<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyn extends Model
{
    //
    protected $fillable=[


        'company_id',
        'location',
        'establishment_year',
        'website'
    ];
}
