<?php

namespace App\Http\Controllers;

use App\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends BaseController
{
    use Helpers;

    public function index()
    {
        $users = User::all();

        return response()->success(compact('users'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->input());
        $user->save();

        return response()->success(compact('user'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->success(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->input());
        $user->save();

        return response()->success(compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->success('');
    }
}
