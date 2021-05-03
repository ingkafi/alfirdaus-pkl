<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\Presensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;


class PresensiExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(String $bulan) {

        $this->bulan = $bulan;
    }
    public function view(): View
    {
        $pr = DB::table('presensi')->where('grade', auth()->user()->grade)->where('bulan',$this->bulan)->orderBy('nama')->first();
        $laki = DB::table('presensi')->where('grade', auth()->user()->grade)->where('bulan',$this->bulan)->where('j_kel','M')->count();
        $perempuan = DB::table('presensi')->where('grade', auth()->user()->grade)->where('bulan',$this->bulan)->where('j_kel','F')->count();
        $presensi = DB::table('presensi')->where('grade', auth()->user()->grade)->where('bulan',$this->bulan)->orderBy('nama')->get();
        return view('exports.presensi',[
            'presensi' => $presensi,
            'pr' => $pr,
            'laki' => $laki,
            'perempuan' => $perempuan,
        ]);
    }
}
