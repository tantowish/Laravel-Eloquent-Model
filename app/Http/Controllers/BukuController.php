<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $data_buku = Buku::all();
        $data_buku_sorted = Buku::all()->sortByDesc('id');

        $no=1;

        $length = Buku::count('id');
        $harga = Buku::sum('harga');

        return view('buku.index',  compact('data_buku', 'data_buku_sorted','no','length','harga'));
    }
}
