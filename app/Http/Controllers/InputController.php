<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Exports\InputExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class InputController extends Controller
{
    public function indexAdmin(Request $request){
        if($request->has('search')){
           $data = Input::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
           Session::put('halaman_url',request()->fullUrl());
        }
        else{
            $data = Input::paginate(10);
            Session::put('halaman_url',request()->fullUrl());
        }
        return view('dataInput',compact('data'));
    }
    public function indexUser(Request $request){
        if($request->has('search')){
           $data = Input::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
           Session::put('halaman_url',request()->fullUrl());
        }
        else{
            $data = Input::paginate(10);
            Session::put('halaman_url',request()->fullUrl());
        }
        return view('dataInputUser',compact('data'));
    }
    public function tambahdata1(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        $this->validate($request,[
            'nik'=> 'required|min:1|max:20',
            'nama' => 'required|min:2|max:100',
            'tl' => 'required',
            'jenisKelamin' => 'required|not_in:0',
            'alamat' => 'required|min:2|max:100',
            'statusperkawinan' =>'required|not_in : 0',
            'pekerjaan' => 'required|min:2|max:100',
            'telephone' => 'required|min:11|max:13'
        ]);
        Input::create($request->all());

        return redirect('/')-> with('success','Data Added');
        //return redirect()-> route('pegawai');
    }
    public function tampildata($id){
        $data = Input::find($id);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Input::find($id);
        $data->update($request->all());
        if (Session('halaman_url')) {
            return redirect(Session('halaman_url'))->with('success','Data berhasil di ubah');
        }

        return redirect('/')->with('success','Data berhasil di ubah');
    }
    public function deletedata($id){
        $data = Input::find($id);
        $data->delete();
        return redirect('/')->with('success','Data berhasil di hapus');
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
