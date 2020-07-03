<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskModel;

class AskController extends Controller
{
    public function index() {
      $ask = AskModel::get_all();
    //   dd($ask);
      return view('ask/index', compact('ask'));
    }

    public function create() {
        return view('ask/form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $ask = AskModel::save($data);
        if($ask){
            return view('ask/index');
        } else {
            return view('ask/form');
        }
    }
    public function show($id){
        $ask = AskModel::find_by_id($id);
        return view('ask/show', compact('ask'));
    }

    public function edit($id){
        $ask = AskModel::find_by_id($id);
        return view('ask/edit', compact('ask'));
    }

    public function update($id, Request $request){
        // dd($request->all());
        $ask = AskModel::update($id, $request->all());
        return redirect('/ask');
    }

    public function destroy($id) {
        $ask = AskModel::destroy($id);
        return redirect('/ask');
    }

    
}
