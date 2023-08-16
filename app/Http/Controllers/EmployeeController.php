<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('datapegawai',compact('data'));
    }
    public function tambahpegawai(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        
        Employee::create($request->all());
        return redirect()->route('pegawai')-> with('Success','Data Added');
        //return redirect()-> route('pegawai');
    }
    public function tampildata($id){
        $data = Employee::find($id);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('Success','Data berhasil di ubah');
    }
    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('Success','Data berhasil di hapus');
    }
}
