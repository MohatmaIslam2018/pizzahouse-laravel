<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebab;
use Illuminate\Support\Facades\DB;

class KebabController extends Controller
{
    // public function index(){

    //     $kebab = Kebab::all();
    //     return view('kebab.index', ['kebab' => $kebab]);
    // }

    public function index(){

        $kebabs = Kebab::all();
        return view('kebabs.index', ['kebabs' => $kebabs]);

    }

    public function create(){

        return view('kebabs.create');
    }

    public function store(){
        
        $kebab = new Kebab();

        $kebab->name = request('name');
        $kebab->type = request('type');
        $kebab->filling = request('filling');
        $kebab->sides = request('sides');

        $kebab->save();

        return redirect('/')->with('msg', 'Thanks for ordering');

        
    }

    public function show($id){

        $kebab = Kebab::findOrFail($id);

        return view('kebabs.show', ['kebab' => $kebab]);
    }

    public function edit($id){

        $kebab = Kebab::findOrFail($id);

        return view('kebabs.edit', ['kebab' => $kebab]);
    }

    public function update(Request $req){

        $kebab = Kebab::find($req->id);

        $kebab->name = request('name');
        $kebab->type = request('type');
        $kebab->filling = request('filling');
        $kebab->sides = request('sides');

        $kebab->update();

        return redirect('/')->with('msg', 'Your order has been updated!');

        
    }

    public function destroy($id){
        
        $kebab = Kebab::findOrFail($id);
        $kebab->delete();

        return redirect('/kebabs');
    }



}
