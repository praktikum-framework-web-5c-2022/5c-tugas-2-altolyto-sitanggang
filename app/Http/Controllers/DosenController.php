<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function insert(){
        
        //RAW
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2001721100429', 'Asep Jamaludin M.Kom','Pria','Jl.Cempaka Raya','Bekasi','1989-10-23','asep.png',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '2001721100420',
                'nama' => 'Hao Nudin M.Kom',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Cempedak Raya',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1987-11-22',
                'photo' => 'hao.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '2001721100421',
                'nama' => 'Nina Suliyowati',
                'jenis_kelamin' => 'Wanita',
                'alamat' => 'Jl.Kenangan Raya',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1984-12-25',
                'photo' => 'nina.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
            return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        //Query Builder
        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.Cempedak Jaya',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')
        ->where('id','2')
        ->update(
            [
                'alamat' => 'JL.Cempaka Jaya',
                'updated_at' => now(),
            ]
            );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('id','3')->first()->update([
            'alamat' => 'JL.Kenangan Kita',
            'updated_at' => now(),
        ]);
        dump($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['2001721100429']);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')
        ->where('nidn','2001721100420')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','2001721100421')->delete();
        dump($sql2);
    }
}
