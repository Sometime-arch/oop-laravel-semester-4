<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mhs;


class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = mhs::all();
        return view('mhs',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form_mhs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mhs = new mhs;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->gender = $request->gender;
        $mhs->no_hp = $request->no_hp;
        $mhs->save();
        return redirect('/mhs');
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
