<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asset;
use PDF;

class asset_controller extends Controller
{
    public function index(){
        $asset=asset::all();
    return view ('Asset.dashboard',compact('asset'));
    }
    public function create(Request $request){
            asset::create($request->all());
            return redirect('Dashboard')->with('sukses','data berhasil ditambakan');
     }
    public function scanner(){
         return view('Scanner.index');
     }
    
     public function cetak_pdf()
    {
    	$asset = asset::all();
    	$pdf = PDF::loadview('asset.pdf',compact('asset'));
    	return $pdf->download('laporan-barcode.pdf');
    }

    public function dashboard(){
        $total_asset = asset::select(asset::raw('count(id) as asset'))->first();
        return view('dashboard.index',compact('total_asset'));
    }
}

?>