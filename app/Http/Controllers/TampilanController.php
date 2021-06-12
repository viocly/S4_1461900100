<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kamar')
            ->join('dokter', 'id_dokter', '=', 'dokter.id')
            ->join('pasien', 'id_pasien', '=', 'pasien.id')
            ->select(
                'pasien.id as pasien_id',
                'dokter.id as dokter_id',
                'kamar.id as kamar_id',
                'pasien.nama as pasien_nama',
                'pasien.alamat as alamat',
                'dokter.jabatan as jabatan',
                'dokter.nama as dokter_nama'
            )
            ->get();
        return view('home0100', ['datas' => $data]);
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));

        return redirect('/home')->with('success', 'All good!');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
