<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kodepos;

class KodeposController extends Controller
{
    public function get_provinsis(Request $request){
        $provinsis = Kodepos::select('provinsi')->groupBy('provinsi')->get();
        return response()->json($provinsis, 200);
    }

    public function get_kabupatens(Request $request){
        $kabupatens = Kodepos::select('kabupaten')
            ->where('provinsi', $request->provinsi)
            ->groupBy('kabupaten')->get();
        return response()->json($kabupatens, 200);
    }

    public function get_kecamatans(Request $request){
        $kecamatans = Kodepos::select('kecamatan')
            ->where('provinsi', $request->provinsi)
            ->where('kabupaten', $request->kabupaten)
            ->groupBy('kecamatan')->get();
        return response()->json($kecamatans, 200);
    }

    public function get_kelurahans(Request $request){
        $kelurahans = Kodepos::select('kelurahan')
            ->where('provinsi', $request->provinsi)
            ->where('kabupaten', $request->kabupaten)
            ->where('kecamatan', $request->kecamatan)
            ->groupBy('kelurahan')->get();
        return response()->json($kelurahans, 200);
    }

    public function get_kodepos(Request $request){
        $kodepos = Kodepos::select('kodepos')
            ->where('provinsi', $request->provinsi)
            ->where('kabupaten', $request->kabupaten)
            ->where('kecamatan', $request->kecamatan)
            ->where('kelurahan', $request->kelurahan)->first();
        return response()->json($kodepos, 200);
    }
}
