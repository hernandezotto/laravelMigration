<?php

namespace App\Http\Controllers;

use App\apprentices;
use App\Document_types;
use App\formation_program;
use App\Genders;
use App\Groups;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    public function index()
    {
        $rows=apprentices::all();
        return view('aprendices.index',compact('rows'));
    }
    public function create()
    {
        $formation=formation_program::all();
        $group=Groups::all();
        $document=Document_types::all();
        $genders=Genders::all();
        return view('aprendices.create',compact('formation','group','document','genders'));

    }
    public function data(Request $request)
    {
        $rows=apprentices::create($request->all());
        return redirect()->route('aprendices.index');
    }
    public function edit($id)
    {
        $formation=formation_program::find($id)->all();
        $group=Groups::find($id)->all();
        $document=Document_types::find($id)->all();
        $genders=Genders::find($id)->all();
        $rows=apprentices::find($id);
        return view('aprendices.edit',compact('formation','group','document','genders','rows'));
    }
    public function update(Request $request,$id)
    {
        $rows=apprentices::find($id)->update([
            'names'=>$request->input('names'),
            'lastnames'=>$request->input('lastnames'),
            'email'=>$request->input('email'),
            'document'=>$request->input('document'),
            'edad'=>$request->input('edad'),
        ]);
        return redirect()->route('aprendices.index');
    }
    public function delete($id)
    {
        $rows=apprentices::find($id)->delete();
        return redirect()->route('aprendices.index');
    }

}
