<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'id','name_th','name_en'
    ];
    protected $hidden = [];
    protected $table = 'faculties';

    public $timestamps = false;
    public $incrementing = false;
}
