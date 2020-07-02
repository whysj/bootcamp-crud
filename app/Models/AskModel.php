<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AskModel {

    public static function get_all() {
        $ask = DB::table('ask')->get();
        return $ask;
    }

    public static function save($data) {
        $new_ask = DB::table('ask')->insert($data);
        return $new_ask;
    }


}

?>