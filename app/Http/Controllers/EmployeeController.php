<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Employee::where('Name','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Employee::paginate(5);
        }
        return view('datapegawai',compact('data'));
    }
    public function tambahpegawai(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        
        Employee::create($request->all());
        return redirect()->route('pegawai')-> with('success','Data Added');
        //return redirect()-> route('pegawai');
    }
    public function tampildata($id){
        $data = Employee::find($id);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data berhasil di ubah');
    }
    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data berhasil di hapus');
    }
    public function eksportpdf(){
        $data = Employee::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('datapegawai-pdf');
        return $pdf->download();
    }
}
