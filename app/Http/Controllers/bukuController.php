<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Image;

class bukuController extends Controller
{
    public function data_buku(){
        $dataa = Buku::all();
        return view('admin.masterData.data_buku',['data'=> $dataa]);
    }

    public function addbuku()
    {
        return view('admin.masterData.data_buku', compact('buku'));
    }

    public function add(Request $request)
    {
            $this->validate($request,[
                'cover' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
           
            if ($request->hasFile('cover')) {
                # code...
                $cover = $request->file('cover');
                $new_name = rand().'.'.time().'.'.$cover->getClientOriginalExtension();
                
                $cover->move('uploads', $new_name);
            
                $buku = new Buku;
                $buku->judul = $request->judul;
                $buku->pengarang = $request->pengarang;
                $buku->penerbit = $request->penerbit;
                $buku->tahun_terbit = $request->tahun_terbit;
                $buku->jumlah_buku = $request->jumlah_buku;
                $buku->deskripsi = $request->deskripsi;
                $buku->lokasi = $request->lokasi;
                $buku->cover = $new_name;
                $buku->save();
    
                return redirect('/admin/masterData/data_buku')->with('success','Buku Added succesfull');
            
            }
    }

    public function hapus($id){
        $del = Buku::findOrFail($id);
        File::delete('uploads/'.$del->cover);

        Buku::where('id',$id)->delete();
        return redirect('/admin/masterData/data_buku')->with('success','Hapus data berhasil');
    }

    public function edit(Buku $buku,$id)
    {
        $buku = $buku->find($id);
        return view('admin.masterData.edit_buku',['buku' => $buku]);
    }

    public function edit_proc(Request $request,Buku $buku){
        
        $buku = $buku->find($request->id);
        $new_name = $buku->cover;
        
        if ($request->hasFile('cover')) {
            # code...
            $del = Buku::findOrFail($request->id);
            File::delete('uploads/'.$del->cover);
            $cover = $request->file('cover');
            $new_name = rand().'.'.time().'.'.$cover->getClientOriginalExtension();
            $cover->move('uploads', $new_name);
        }

        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->deskripsi = $request->deskripsi;
        $buku->lokasi = $request->lokasi;
        $buku->cover = $new_name;
        $buku->save();

        return redirect('/admin/masterData/data_buku')->with('success','edit data berhasil');
    }

}
