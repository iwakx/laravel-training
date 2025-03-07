<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index () {

        $produk = Produk::Produk();

        return view('produk.index', compact('produk'));
    }
}
