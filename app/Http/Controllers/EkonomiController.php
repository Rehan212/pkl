<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ekonomi1;

class EkonomiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekonomi1 = ekonomi::all();
        $response = [
            'success' => true,
            'data' => $ekonomi1,
            'Message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekonomi1 = new ekonomi();
        $ekonomi1->kelas = $request->kelas;
        $ekonomi1->guru = $request->guru;
        $ekonomi1->wali = $request->wali;
        $ekonomi1->siswa = $request->siswa;
        $ekonomi1->umur = $request->umur;
        $ekonomi1->save();
        $response = [
            'success' => true,
            'data' => $ekonomi1,
            'Message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekonomi1 = ekonomi::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $ekonomi1,
            'Message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ekonomi1 = ekonomi::findOrFail($id);
        $ekonomi1->kelas = $request->kelas;
        $ekonomi1->guru = $request->guru;
        $ekonomi1->wali = $request->wali;
        $ekonomi1->siswa = $request->siswa;
        $ekonomi1->umur = $request->umur;
        $ekonomi1->save();
        $response = [
            'success' => true,
            'data' => $ekonomi1,
            'Message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekonomi1 = ekonomi::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $ekonomi1,
            'Message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
