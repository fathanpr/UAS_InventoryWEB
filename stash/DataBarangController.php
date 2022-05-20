<?php

namespace App\Http\Controllers;

use App\Models\DataBarangModel;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    // public function index(){

    //     $data_barang  = DataBarangModel::all();
    //     return view('admin.databarang',compact('data_barang'));
    // }

    public function index(Request $request){

        if($request){
            $data_barang  = DataBarangModel::where('barang','LIKE','%' .$request->search.'%')->get();
        }else{
            $data_barang  = DataBarangModel::all();
        }
        return view('admin.databarang',compact('data_barang'));
    }

    public function store(Request $request){
        $data = $request->all();
        DataBarangModel::create($data);
        return redirect()->route('databarang');
    }

    public function destroy($id) {
        DataBarangModel::destroy('DELETE FROM databarang WHERE id = ?', [$id]);
        return redirect('databarang');
    }
}