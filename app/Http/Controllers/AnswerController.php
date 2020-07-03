<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;

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
          $answer = AnswerModel::save($data);
          if($answer){
              return view('Answer.index');
          } else {
            return view('Answer.form');
          }
      }

    
}
