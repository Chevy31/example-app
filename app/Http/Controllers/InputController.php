<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InputExport;

class InputController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
           $data = Input::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
        }
        else{
            $data = Input::paginate(10);
        }
        return view('dataInput',compact('data'));
    }
    public function tambahdata1(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        
        Input::create($request->all());
        return redirect()->route('home')-> with('success','Data Added');
        //return redirect()-> route('pegawai');
    }
    public function tampildata($id){
        $data = Input::find($id);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Input::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('success','Data berhasil di ubah');
    }
    public function deletedata($id){
        $data = Input::find($id);
        $data->delete();
        return redirect()->route('home')->with('success','Data berhasil di hapus');
    }
    public function eksportpdf(){
        $data = Input::all();
        view()->share('data',$data);
        $pdf = Pdf::loadview('dataInput-pdf');
        return $pdf->download();
    }
    public function eksportexcel(){
        return Excel::download(new InputExport,'data.xlsx');
    }
}
