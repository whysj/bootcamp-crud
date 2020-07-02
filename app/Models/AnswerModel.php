<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel {

    public static function get_all() {
        $answer = DB::table('answer')->get();
        return $answer;
    }

    public static function save($data) {
        $new_answer = DB::table('answer')->insert($data);
        return $new_answer;
    }


}

?>