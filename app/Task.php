<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
//        use SoftDeletes;

    protected $fillable = [
        'name',
        'done',
    ];
}
