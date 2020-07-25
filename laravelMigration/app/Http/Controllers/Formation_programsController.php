<?php

namespace App\Http\Controllers;

use App\formation_program;
use Illuminate\Http\Request;

class Formation_programsController extends Controller
{
    public function select()
    {
        $rows=formation_program::all();
        return view('cursos.index',compact('rows'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function data(Request $request)
    {
        $rows=formation_program::create([
            'name'=>$request->input('name'),
            'abbrevation'=>$request->input('abbrevation')
            ]);
        return redirect()->route('cursos.index');
    }
    public function edit($id)
    {
        $rows=formation_program::find($id);
        return view('cursos.edit',compact('rows'));

    }
    public function update(Request $request,$id)
    {
        $rows=formation_program::find($id)->update([
            'name'=>$request->input('name'),
            'abbrevation'=>$request->input('abbrevation')
        ]);
        return redirect()->route('cursos.index');
    }
    public function delete($id)
    {
        $rows=formation_program::find($id)->delete();
        return redirect()->route('cursos.index');
    }

}

