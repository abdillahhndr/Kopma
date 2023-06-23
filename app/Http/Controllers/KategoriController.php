<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return response()->json(['massage'=>'Success','data'=>$kategoris]);
    }
    public function show($id)
    {
        $kategoris = Kategori::find($id);
        return response()->json(['massage'=>'Success','data'=>$kategoris]);
    }
    public function creates(Request $request)
    {
        $kategoris = Kategori::create($request->all());
        return response()->json(['massage'=>'Success insert','data'=>$kategoris]);
    }
    public function update(Request $request,$id)
    {
        $kategoris = Kategori::find($id);
        $kategoris->update($request->all());
        return response()->json(['massage'=>'Success update','data'=>$kategoris]);
    }
    public function destroy(Request $request,$id)
    {
        $kategoris = Kategori::find($id);
        $kategoris->delete();
        return response()->json(['massage'=>'Success Delete','data'=>null]);
    }
}
