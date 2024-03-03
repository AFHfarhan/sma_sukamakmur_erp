<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    

    // pembiayaan dan pembayaran
    public function buat_pembayaran_baru(){
        return view('pages.pembayaran_pembiayaan.buat_pembayaran_baru');
    }
    
    public function daftar_pembayaran_pembiayaan(){
        return view('pages.pembayaran_pembiayaan.daftar_pembayaran_pembiayaan');
    }

    public function detail_pembayaran_pembiayaan(){
        return view('pages.pembayaran_pembiayaan.detail_pembayaran_pembiayaan');
    }

    public function konfirmasi_pembayaran(){
        return view('pages.pembayaran_pembiayaan.konfirmasi_pembayaran');
    }

    // absensi 
    public function daftar_absensi(){
        return view('pages.absensi.daftar_absensi');
    }
    
    public function detail_absensi(){
        return view('pages.absensi.detail_absensi');
    }

    public function tambah_absensi(){
        return view('pages.absensi.tambah_absensi');
    }

    public function tambah_absensi_guru(){
        return view('pages.absensi.tambah_absensi_guru');
    }
}
