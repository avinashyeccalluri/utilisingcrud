<?php

namespace App\Http\Controllers;
use App\yeccallurifamily;
use Illuminate\Http\Request;

class familycontroller extends Controller
{
    public function index()
    {
        $family=yeccallurifamily::all();
        return view ('family.index',compact('family'));
    }
    public function create()
    {
        return view ('family.create');
    }
    public function store(yeccallurifamily $family)
    {
        request()->validate(['firstname'=>['required','min:3','max:10'],'lastname'=>['required','min:3','max:10'],'position'=>['required','min:3','max:10']]);
        $family->create(request(['firstname','lastname','position']));
        return redirect ('/family');
    }
    public function show(yeccallurifamily $family)
    {
        return view ('family.show',compact('family'));
    }
    public function edit(yeccallurifamily $family)
    {
        return view ('family.edit',compact('family'));
    }
    public function update(yeccallurifamily $family)
    {
        $family->update(request(['firstname','lastname','position']));
        return redirect ("/family");
    }
    public function destroy(yeccallurifamily $family)
    {
        $family->delete();
        return redirect('/family');
    }
}
