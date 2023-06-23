<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json(['massage'=>'Success','data'=>$suppliers]);
    }
    public function show($id)
    {
        $suppliers = Supplier::find($id);
        return response()->json(['massage'=>'Success','data'=>$suppliers]);
    }
    public function creates(Request $request)
    {
        $suppliers = Supplier::create($request->all());
        return response()->json(['massage'=>'Success insert','data'=>$suppliers]);
    }
    public function update(Request $request,$id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->update($request->all());
        return response()->json(['massage'=>'Success update','data'=>$suppliers]);
    }
    public function destroy(Request $request,$id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return response()->json(['massage'=>'Success Delete','data'=>null]);
    }
}
