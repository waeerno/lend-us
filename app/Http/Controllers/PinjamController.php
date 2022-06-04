<?php

namespace App\Http\Controllers;

use App\Http\Requests\PinjamRequest;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kode_pinjam = substr(rand(), 0, 4);


        $new_pinjam = new Pinjam;
        $new_pinjam->kode_pinjam = 'PTIPD-' . $kode_pinjam;

        $new_pinjam->save();

        $id = Pinjam::orderBy('id', 'desc')->first();
        $kode_pinjam = $id->kode_pinjam;

        return to_route('pinjam.show', ['pinjam' => $kode_pinjam]);
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
        $params = [
            'data' => Pinjam::where('kode_pinjam', $id)->first()
        ];

        return view('welcome.pinjam')->with($params);
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
    public function update(PinjamRequest $request, $id)
    {
        $data = Pinjam::where('kode_pinjam', $id);

        $data->jenis_pengguna   = $request->get('jenis_pengguna');
        $data->jenis_pinjam     = $request->get('jenis_pinjam');
        $data->nama_peminjam    = $request->get('nama');
        $data->nomor_induk      = $request->get('nomor_induk');
        $data->hp               = $request->get('hp');
        $data->email            = $request->get('email');
        $data->nomor_surat      = $request->get('nomor');
        $data->tanggal_surat    = $request->get('tanggal_surat');
        $data->nama_kegiatan    = $request->get('nama_kegiatan');
        $data->file             = $request->get('file');
        $data->steep            = $request->get('steep');
        $data->selesai          = $request->get('selesai');
        $data->status           = $request->get('status');

        dd($data);
        $data->save();
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
