<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'course_section_id','name','details','assign_date','due_date','accept_date'
        ,'teacher_id','semester_id','homework_type_id'
    ];
}
