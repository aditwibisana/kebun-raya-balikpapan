<?php

namespace App\Http\Controllers;

use Auth;
use App\Pembayaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Auth()->user()->pemesanan;
        return view('pemesanan.index', compact('pemesanan'));
    }
    public function tampil(Request $request, $id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        return view('pemesanan/bayar',  ['pemesanan' => $pemesanan]);
    }
    public function bukti(Request $request, $id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        $pemesanan->update($request->all());
        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('images/bukti/', $request->file('bukti')->getClientOriginalName());
            $pemesanan->bukti = $request->file('bukti')->getClientOriginalName();
            $pemesanan->save();
        }
        return redirect('/pemesanan')->with('Bukti Berhasil Silahkan Tunggu Konfirmasi');
    }
    public function delete($id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanan')->with('sukses', 'Data Berhasil dihapus');
    }
    public function cetak($id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        $pdf = PDF::loadView('export.exportpdf', ['pemesanan' => $pemesanan]);
        return $pdf->download('bukti.pdf');
    }
    public function tampilPemesanan()
    {
        $pemesanan = \App\Pemesanan::all();
        $pemesanan = $pemesanan->count();
        $pemesanan = \App\Pemesanan::paginate(5);
        return view('adm.pemesanan.index', ['pemesanan' => $pemesanan], compact('rows'));
    }
    public function Konfirmasi(Request $request, $id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        $pemesanan->konfirmasi = 'Konfirmasi';
        $pemesanan->save();
        return redirect('/daftarpemesanan')->with('sukses', 'Pesanan berhasil dikonfirmasi');
    }
    public function btlkonfirmasi(Request $request, $id)
    {
        $pemesanan = \App\Pemesanan::find($id);
        $pemesanan->konfirmasi = 'Belum Konfirmasi';
        $pemesanan->save();
        return redirect('/daftarpemesanan')->with('sukses', 'Konfirmasi dibatalkan');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pemesanan = \App\Pemesanan::where('id', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        return view('adm/pemesanan/index', ['pemesanan' => $pemesanan]);
    }
}
