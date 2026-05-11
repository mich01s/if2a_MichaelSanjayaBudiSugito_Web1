<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // akses tabel Periode
        $result1  = Periode::all(); // select * from periode
        // dd($result);
        
        return view('periodes.index',compact(('result1')));
        // kirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periodes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // validasi input

        // simpan ke tabel periode

        // redirect ke route periode.index
        $input = $request->validate([
            'tahun_akademik' => 'required', 
            'semester'=>'required'
        ]);

        // simpan ke tabel periode
        Periode::create($input);
        
        // redirect ke route periode.index
        return redirect()->route('periodes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        //
    }
}
