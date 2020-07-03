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

    public static function find_by_id($id){
        $ask = DB::table('ask')->where('id', $id)->first();
        return $ask;
    }

    public static function update($id, $request){
        // dd($request->all());
        $ask = DB::table('ask')
        ->where('id', $id)
        ->update([
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tanggal_dibuat' => $request["tanggal_dibuat"],
            'tanggal_diperbaharui' => $request["tanggal_diperbaharui"],
        ]);
        return $ask;
    }

    public static function destroy($id){
        $deleted = DB::table('ask')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }


}

?>