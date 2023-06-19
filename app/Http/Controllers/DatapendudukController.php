<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapenduduk;
use PDF;

class DatapendudukController extends Controller
{
public function index(Request $request)
{
    $searchTerm = $request->input('search');

    $data = datapenduduk::where('nama_lengkap', 'LIKE', '%'.$searchTerm.'%')
        ->paginate(5);

    return view('datapenduduk', compact('data'));
}


    public function dashboard(){
        $data = datapenduduk::all();
        return view ('dashboard', compact('data'));
    }

    public function datapenduduk($datapenduduk)
{
    $view = DB::table('db_layar')
      ->where('id', $datapenduduks)
      ->get()
      ->groupBy('datapenduduk');

    return view('dashboard', compact('view'));
}
    

   public function tambahdata(){
    return view ('tambahdata');
   }

   public function masukdata(Request $request){
    //dd($request->all());
    datapenduduk::create($request->all());
    return redirect()->route('datapenduduk');
   }

   public function tampilkandata($id){

    $data = datapenduduk::find($id);
    return view ('tampildata', compact('data'));
   }

   public function updatedata(Request $request, $id){
    $data = datapenduduk::find($id);
    $data->update($request->all());
    return redirect()->route('datapenduduk')->with('success','data berhasil diubah');
   }

   public function delete($id){
    $data = datapenduduk::find($id);
    $data->delete();
    return redirect()->route('datapenduduk');
   }

   public function exportpdf(){
    $data = datapenduduk::all();

    view()->share('data', $data);
    $pdf = PDF::loadview('datapenduduk-pdf');
    return $pdf->download('datapenduduk.pdf');
   }
}
