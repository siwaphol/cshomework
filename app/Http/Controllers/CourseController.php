<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    public function index()
    {
        
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'code' => 'required',
            'name' => 'required'
        ]);

        $course = new Course();
        $course->code = $request->input('code');
        $course->name = $request->input('name');
        $course->details = $request->input('details');
        $course->save();

        return response()->success(compact('course'));
    }
}
