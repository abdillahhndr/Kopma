<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return response()->json(['massage'=>'Success','data'=>$transaksis]);
    }
    public function show($id)
    {
        $transaksis = Transaksi::find($id);
        return response()->json(['massage'=>'Success','data'=>$transaksis]);
    }
    public function creates(Request $request)
    {
        $transaksis = Transaksi::create($request->all());
        return response()->json(['massage'=>'Success insert','data'=>$transaksis]);
    }
    public function update(Request $request,$id)
    {
        $transaksis = Transaksi::find($id);
        $transaksis->update($request->all());
        return response()->json(['massage'=>'Success update','data'=>$transaksis]);
    }
    public function destroy(Request $request,$id)
    {
        $transaksis = Transaksi::find($id);
        $transaksis->delete();
        return response()->json(['massage'=>'Success Delete','data'=>null]);
    }
}
