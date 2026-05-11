<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel Fakultas
        $result  = Fakultas::all(); // select * from fakultas
        // dd($result);
        
        return view('fakultas.index',compact(('result')));
        // kirim ke view

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // validasi input

        // simpan ke tabel fakultas

        // redirect ke route fakultas.index
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas', 
            'singkatan'=>'required'
        ]);

        // simpan ke tabel fakultas
        Fakultas::create($input);
        
        // redirect ke route fakultas.index
        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
