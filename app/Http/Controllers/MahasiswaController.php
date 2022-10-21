<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170080', 'Okky Wirandana','Pria','Jl.Cemara','Cirebon','2002-10-27','okky.png',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631170070',
                'nama' => 'Anandito Rafi Putra',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Buaya',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2002-06-1',
                'photo' => 'anan.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631170023',
                'nama' => 'Ali Dongan',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Merpati',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2002-12-26',
                'photo' => 'ali.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::all();
        dd($sql2);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Cemara Raya',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')
        ->where('id','2')
        ->update(
            [
                'alamat' => 'JL.Buaya Putih',
                'updated_at' => now()
            ]
            );
        dump($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','3')->first()->update([
            'alamat' => 'JL.Dara',
            'updated_at' => now()
        ]);
        dump($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['2010631170080']);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')
        ->where('npm','2010631170070')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('npm','2010631170023')->delete();
        dump($sql2);
    }
}
