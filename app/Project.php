<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /* allows to store only the propertys, which are declared */
    protected $fillable = [
        'title',
        'description'
    ];

    /* guarded allow every property to be stored, except the ones listed in it  */
    //protected $guarded = []
}
