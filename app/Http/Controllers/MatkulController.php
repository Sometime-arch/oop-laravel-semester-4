<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\matkul;


class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = matkul::all();
        return view('matkul',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //(
        return view('form_matkul');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $matkul = new matkul;
        $matkul->kd_matkul = $request->kd_matkul;
        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->sks = $request->sks;
        $matkul->status = $request->status;
        $matkul->save();
        return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
