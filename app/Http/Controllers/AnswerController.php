<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index() {
        $answer = AnswerModel::get_all();
      //   dd($ask);
        return view('answer.index', compact('answer'));
      }

      public function store(Request $request){
          // dd($request->all());
          $data = $request->all();
          unset($data["_token"]);
          // dd($data);
          $answer = AskModel::save($data);
          if($answer){
              return view('ask.index');
          }
      }
}
