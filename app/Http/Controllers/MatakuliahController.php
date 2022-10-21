<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO matakuliahs (kode_mk,nama_mk,created_at,updated_at) VALUES ('FW001', 'Framework Pemrograman',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')->insert(
            [
                'kode_mk' => 'PBM001',
                'nama_mk' => 'Pemrograman Berbasis',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => 'DM001',
                'nama_mk' => 'Data',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM matakuliahs");
        dd($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::all();
        dd($sql2);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE matakuliahs SET nama_mk='Framework Pemrograman Web',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')
        ->where('id','2')
        ->update(
            [
                'nama_mk' => 'Pemrograman Berbasis Mobile',
                'updated_at' => now()
            ]
            );
        dump($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','3')->first()->update([
            'nama_mk' => 'Data Mining',
            'updated_at' => now()
        ]);
        dump($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM matakuliahs WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')
        ->where('id','2')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::where('id','3')->delete();
        dump($sql2);
    }
}
