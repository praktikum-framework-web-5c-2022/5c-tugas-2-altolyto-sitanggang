<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function(){
    $dosens = ["Kosasih","Salim","Nelly","Chaerudin","Hao","Asep","Evi","Selvi","Muslihat","Tiarlina"];
    $nips = ["2010","2011","2012","2013","2014","2015","2016","2017","2018","2019"];
    return view('dosen.index')->with('dosens', $dosens)->with('nip',$nips);
});

Route::get('/mahasiswa', function () {
    $mahasiswas = ["Anandito", "Yohanes", "Maul", "Ali","Adr","Wibisono","Alif","Yoga","Okky","Alwi"];
    $nims = ["20041","20042","20043","20044","20045","20046","20047","20048","20049","20050"];
    return view('mahasiswa.index')->with('mahasiswas', $mahasiswas)->with('nim',$nims);
    
});

Route::get('/matkul', function(){
    $matkul = ["Kalkulus","Framework Pemrograman Web", "Blockchain", "Data Mining","Technopreuner","Pemrograman Berbasis Mobile","Cloud Computing","Sistem Operasi","Basis Data","Pemrograman Berorientasi Obyek"];
    $sks = ["3","2","3","3","3","3","2","3","2","3"];
    return view('matkul.index')->with('matkuls', $matkul)->with('sks',$sks);
});
