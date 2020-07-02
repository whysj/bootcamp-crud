<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskModel;

class AskController extends Controller
{
    public function index() {
      $ask = AskModel::get_all();
    //   dd($ask);
      return view('ask.index', compact('ask'));
    }

    public function create() {
        return view('ask.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $ask = AskModel::save($data);
        if($ask){
            return view('ask.index');
        }
    }
}
