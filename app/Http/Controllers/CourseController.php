<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }

    public function show($id)
    {
        return Course::findOrFail($id);
    }

    public function store(Request $request)
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

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required'
        ]);

        $course = Course::findOrFail($id);
        $course->code = $request->input('code');
        $course->name = $request->input('name');
        $course->details = $request->input('details');
        $course->save();

        return response()->success(compact('course'));
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return response()->sucess();
    }
}
