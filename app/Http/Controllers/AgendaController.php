<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $data = Agenda::all();
       
        return view ('agenda', compact('data'));
    }

    public function index2(){
        $data = Agenda::all();
       
        return view ('welcome', compact('data'));
    }

    public function tambahagenda(){
        return view ('tambahagenda');
        }

    public function agendabaru(Request $request){
        $data = Agenda::create($request->all());
        if ($request->hasFile('foto')){
            $request ->file('foto')->move('fotoagenda/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
         }
        return redirect()->route('agenda');
    }

    public function tampilkanagenda($id){

        $data = Agenda::find($id);
        //dd($data);
        return view ('tampilkanagenda', compact('data'));
    }

    public function updateagenda(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')){
            $request ->file('foto')->move('fotoagenda/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
         }
        return redirect()->route('agenda')->with('bisa');
    }

    public function delete($id){
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda')->with('bisa');
    }

    
}
