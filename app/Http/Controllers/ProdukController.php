<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() 
    {
        $data_produk = \App\Models\Produk::all();
        return view('produk.index',['data_produk' => $data_produk]);
    }

    public function create(Request $request)
    {
        \App\Models\Produk::create($request->all());
        return redirect('/produk')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $produk = \App\Models\Produk::find($id);
        return view('produk/edit',['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $produk = \App\Models\Produk::find($id);
        $produk->update($request->all());
        return redirect('/produk')->with('sukses','data berhasil diupdate');
    }

    public function delete($id)
    {
        $produk = \App\Models\Produk::find($id);
        $produk->delete($produk);
        return redirect('/produk')->with('sukses','Data berhasil dihapus');
    }
}
