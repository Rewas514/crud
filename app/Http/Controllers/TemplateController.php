<?php

namespace App\Http\Controllers;

use App\template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('template_create');
    }

    public function store(Request $request)
    {
        $res=new Template;
        $res->subject=$request->input('subject');
        $res->message=$request->input('message');
        $res->save();

        $request->session()->flash('msg','Data submitted');
        return redirect('template_show');
    }


    public function show(template $template)
    {
        return view('template_show')->with('templateArr',Template::all());
    }

    public function edit(template $template, $id)
    {
        return view('template_edit')->with('templateArr',Template::find($id));
    }


    public function update(Request $request, template $template)
    {
        $res=Template::find($request->id);
        $res->subject=$request->input('subject');
        $res->message=$request->input('message');
        $res->save();

        $request->session()->flash('msg','Data submitted');
        return redirect('template_show');
    }


    public function destroy(template $template, $id)
    {
        template::destroy(array('id',$id));

        return redirect('template_show');
    }
}
