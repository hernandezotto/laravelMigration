<?php

namespace App\Http\Controllers;

use App\formation_program;
use App\Groups;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {
        $rows=Groups::all();
        return view('fichas.index',compact('rows'));
    }
    public function create()
    {
        $formation=formation_program::all();
        return view('fichas.create',compact('formation'));
    }
    public function data(Request $request)
    {
        $rows=Groups::create($request->all());
        return redirect()->route('fichas.index');
    }
    public function edit($id)
    {
        $rows=Groups::find($id);
        $formation=formation_program::find($id)->all();
        return view('fichas.edit',compact('rows','formation'));
    }
    public function update(Request $request,$id)
    {
        $rows=Groups::find($id)->update([
            'name'=>$request->input('name'),

            ]);
            return redirect()->route('fichas.index');
    }
    public function delete($id)
    {
        $rows=Groups::find($id)->delete();
        return redirect()->route('fichas.index');
    }
}
