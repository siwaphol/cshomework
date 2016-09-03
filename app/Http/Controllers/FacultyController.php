<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

use App\Http\Requests;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return response()->success(compact('faculties'));
    }

    public function show($id)
    {
        $faculty = Faculty::findOrFail($id);
        return response()->success(compact('faculty'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer'
        ]);

        $faculty = new Faculty();
        $faculty->id = $request->input('id');
        $faculty->name_th = $request->input('name_th');
        $faculty->name_en = $request->input('name_en');
        $faculty->save();

        return response()->success(compact('faculty'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required|integer'
        ]);

        $faculty = Faculty::findOrFail($id);
        $faculty->id = $request->input('id');
        $faculty->name_th = $request->input('name_th');
        $faculty->name_en = $request->input('name_en');
        $faculty->save();

        return response()->success(compact('faculty'));
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        return response()->sucess();
    }
}
