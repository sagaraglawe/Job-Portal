<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable=[

        'company_id',
        'location',
        'skill',
        'salary',
        'experience'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
