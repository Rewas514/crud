<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('crud_create');
    }

    public function store(Request $request)
    {
        $res=new Crud;
        $res->name=$request->input('name');
        $res->surname=$request->input('surname');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->save();

        $request->session()->flash('msg','Data submitted');
        return redirect('crud_show');
    }


    public function show(crud $crud)
    {
        return view('crud_show')->with('crudArr',Crud::all());
    }

    public function edit(crud $crud, $id)
    {
        return view('crud_edit')->with('crudArr',Crud::find($id));
    }


    public function update(Request $request, crud $crud)
    {
        $res=Crud::find($request->id);
        $res->name=$request->input('name');
        $res->surname=$request->input('surname');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->save();

        $request->session()->flash('msg','Data submitted');
        return redirect('crud_show');
    }


    public function destroy(crud $crud, $id)
    {
        crud::destroy(array('id',$id));

        return redirect('crud_show');
    }
}
