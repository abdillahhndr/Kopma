<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
{
    $barangs = Barang::all();
    $kategori = Kategori::all();
    $supplier = Supplier::all();

    $data = [];
    foreach ($barangs as $barang) {
        $kategoriNama = $kategori->where('id', $barang->kategori_id)->first()->nama_kategori ?? null;
        $supplierNama = $supplier->where('id', $barang->supplier_id)->first()->nama_supplier ?? null;

        $data[] = [
            'id' => $barang->id,
            'nama_barang' => $barang->nama_barang,
            'harga' => $barang->harga,
            'stok' => $barang->stok,
            'supplier_id' => $barang->supplier_id,
            'kategori_id' => $barang->kategori_id,
            'nama_supplier' => $supplierNama,
            'nama_kategori' => $kategoriNama,
        ];
    }

    return response()->json(['message' => 'Success', 'data' => $data]);
}
    public function show($id)
    {
        $barangs = Barang::find($id);
        return response()->json(['massage'=>'Success','data'=>$barangs]);
    }
    public function creates(Request $request)
    {
        $barangs = Barang::create($request->all());
        return response()->json(['massage'=>'Success insert','data'=>$barangs]);
    }
    public function update(Request $request,$id)
    {
        $barangs = Barang::find($id);
        $barangs->update($request->all());
        return response()->json(['massage'=>'Success update','data'=>$barangs]);
    }
    public function destroy(Request $request,$id)
    {
        $barangs = Barang::find($id);
        $barangs->delete();
        return response()->json(['massage'=>'Success Delete','data'=>null]);
    }

}
