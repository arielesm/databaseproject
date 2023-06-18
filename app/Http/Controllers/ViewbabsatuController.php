<?php

namespace App\Http\Controllers;

use App\Models\Viewbabsatu;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ViewbabsatuController extends Controller
{
    public function index(){
        $data_website = viewbabsatu::get();
        return view('viewbabsatu.index', ['viewbabsatu' => $data_website]);
    }

    public function tambah(){

        return view('viewbabsatu.form');
    }

    public function simpan(Request $request){
        $data = [
            'nama_berkas' => $request->nama_berkas,
            'judul_berkas' => $request->judul_berkas,
            'nama_pt' => $request->nama_pt,
            'alamat_pt' => $request->alamat_pt,
            'izinop_text' => $request->izinop_text,
            'izinop_file' => $request->izinop_file,
            'statakreinst_text' => $request->statakreinst_text,
            'statakreinst_file' => $request->statakreinst_file,
            'namaptmitra' => $request->namaptmitra,
            'alamatptmitra' => $request->alamatptmitra,
            'negaramitra' => $request->negaramitra,
            'izinopmitra_text' => $request->izinopmitra_text,
            'izinopmitra_file' => $request->izinopmitra_file,
            'statakreinstmitra_text' => $request->statakreinstmitra_text,
            'statakreinstmitra_file' => $request->statakreinstmitra_file,
            'peringinter' => $request->peringinter,
            'namaprodipt' => $request->namaprodipt,
            'namaprodimitra' => $request->namaprodimitra,
            'namaprodipt_select' => $request->namaprodipt_select,
            'namaprodimitra_text' => $request->namaprodimitra_text,
            'akreprodpt' => $request->akreprodpt,
            'akreprodmitra' => $request->akreprodmitra,
            'akreprodpt_select' => $request->akreprodpt_select,
            'akreprodmitra_text' => $request->akreprodmitra_text,
            'sk_akprodpt' => $request->sk_akprodpt,
            'sk_akprodmitra' => $request->sk_akprodmitra,
            'sk_akprodpt_file' => $request->sk_akprodpt_file,
            'sk_akprodmitra_file' => $request->sk_akprodmitra_file,
            'izopeprodipt' => $request->izopeprodipt,
            'izopeprodimitra' => $request->izopeprodimitra,
            'izopeprodipt_file' => $request->izopeprodipt_file,
            'izopeprodimitra_file' => $request->izopeprodimitra_file,
            'proposalusul_file' => $request->proposalusul_file,

        ];

        Barang::create($data);

        return redirect()->route('barang');
    }

    public function edit($id){
            $barang = Barang::find($id);

            return view('barang.form',['barang' => $barang]);
    }

    public function update($id, Request $request){
        $data = [
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        $barang = Barang::find($id)->update($data);

        return redirect()->route('barang');
    }

    public function hapus($id){
        Barang::find($id)->delete();
        return redirect()->route('barang');
    }
}
