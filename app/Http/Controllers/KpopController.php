<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\List_;

class KpopController extends Controller
{
    public function list()
    {
        $hasil = DB::select('select * from db_kpop');
        return view('list-kpop', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        DB::insert(
            'insert into db_kpop (nama_printilan, kategori_printilan, stock_printilan) values (?, ?, ?)',
            [$req->nama_printilan, $req->kategori_printilan, $req->stock_printilan]
        );
        $hasil = DB::select('select * from db_kpop');
        return view('list-kpop', ['data' => $hasil]);
    }
    public function hapus($req)
    {
        Log::info('proses hapus dengan id=' . $req);
        DB::delete('delete from db_kpop where id = ?', [$req]);

        $hasil = DB::select('select * from db_kpop');
        return view('list-kpop', ['data' => $hasil]);
    }
    public function ubah($req)
    {
        $hasil = DB::select('select * from db_kpop where id = ?', [$req]);
        return view('form-ubah', ['data' => $hasil]);
    }
    public function rubah(Request $req)
    {
        Log::info('Hallo');
        Log::info($req);
        DB::update(
            'update db_kpop set ' .
                'nama_printilan=?, ' .
                'kategori_printilan=?, ' .
                'stock_printilan=? where id=? ',
            [
                $req->nama_printilan,
                $req->kategori_printilan,
                $req->stock_printilan,
                $req->id
            ]
        );
        $hasil = DB::select('select * from db_kpop');
        return view('list-kpop', ['data' => $hasil]);
    }
}
