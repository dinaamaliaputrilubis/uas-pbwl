<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pembeli::all();
        return view('pembeli.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'bail|required|unique:tb_pembeli',
            'no_telp' => 'required'
            ],
            [
                'nama_pembeli.required' => 'Nama Pembeli wajib diisi',
                'nama_pembeli.unique' => 'Nama Pembeli sudah ada',
                'no_telp.required' => 'Nomor Telepon wajib diisi'
            ]);

            Pembeli::create([
                'nama_pembeli' => $request->nama_pembeli,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat
                ]);
                
                return redirect('pembeli');
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
        $row = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('row'));
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
        $request->validate(
            [
            'nama_pembeli' => 'bail|required',
            'no_telp' => 'required'
            ],
            [
            'nama_pembeli.required' => 'Nama Pembeli wajib diisi',
            'no_telp.required' => 'Nomor Telepon wajib diisi'
            ]
            );

            $row = Pembeli::findOrFail($id);
            $row->update([
            'nama_pembeli' => $request->nama_pembeli,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
            ]);

            return redirect('pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Pembeli::findOrFail($id);
        $row->delete();

        return redirect('pembeli');
    }
}
