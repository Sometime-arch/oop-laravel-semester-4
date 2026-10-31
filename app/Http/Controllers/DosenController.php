<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [
        //     'nama' => 'deo steafin syam',
        //     'nim' => '2455201048'
        // ];
        $data = dosen::all();
        return view('dosen',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form_dosen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dosen = new dosen;
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->created_at = $request->created_at;
        $dosen->updated_at = $request->updated_at;
        $dosen->save();
        return redirect('/dosen');
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
        $dosen = dosen::find($id);
        return view('/dosen_edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dosen = dosen::find($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->created_at = $request->created_at;
        $dosen->updated_at = $request->updated_at;
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dosen = dosen::find($id);
        $dosen ->delete();
        return redirect('/dosen');
    }
}
