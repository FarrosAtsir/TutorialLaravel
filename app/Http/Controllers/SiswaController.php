<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('home', compact(['siswa']));
    }
    public function add(){
        return view('add');
    }
    public function create(Request $request){
        $siswa = Siswa::create($request->all());
        return redirect('/');
    }
    public function edit($id){
        $siswa = Siswa::find($id);
        return view('update.edit', compact(['siswa']));
    }
    public function update($id, Request $request){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/');
    }
    public function destroy($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/');
    }
}
