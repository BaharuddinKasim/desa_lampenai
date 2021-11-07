<?php

namespace App\Http\Controllers\Surat;

use App\Models\Surat\SuratKetTidakMampu;
use Illuminate\Http\Request;

class SuratKetTidakMampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat/surat_ket_tidak_mampu/v_index');
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
     * @param  \App\Models\Surat\SuratKetTidakMampu  $suratKetTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKetTidakMampu $suratKetTidakMampu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat\SuratKetTidakMampu  $suratKetTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKetTidakMampu $suratKetTidakMampu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat\SuratKetTidakMampu  $suratKetTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKetTidakMampu $suratKetTidakMampu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat\SuratKetTidakMampu  $suratKetTidakMampu
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKetTidakMampu $suratKetTidakMampu)
    {
        //
    }
}
