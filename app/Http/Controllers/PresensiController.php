<?php

namespace App\Http\Controllers;

use App\Exports\PresensiExport;
use App\Models\Presensi;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;



class PresensiController extends Controller
{
    public function presensi()
    {
        $presensi = DB::table('presensi')->where('grade', auth()->user()->grade)->get();
        return view('/hrt/aplikasi/presensi/index',['presensi'=>$presensi]);
        
    }
    public function editpresensi(Request $request)
    {
        $presensi = DB::table('presensi')->where('grade', auth()->user()->grade)->where('bulan',$request->route('presensi'))->orderBy('nama')->get();
        return view('/hrt/aplikasi/presensi/edit', ['presensi' =>$presensi]);
    }
    public function presensibulan(Request $request)
    {
        $presensi = DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan',$request->route('bulan'))->first();
        return view('/parent/presensi/view', ['presensi' =>$presensi]);
    }
    public function resetpresensi(Request $request)
    {
        Presensi::where('grade', auth()->user()->grade)->where('bulan',$request->route('presensi'))
        ->update([
            'tgl_1'       =>   null,
            'tgl_2'       =>   null,
            'tgl_3'       =>   null,
            'tgl_4'       =>   null,
            'tgl_5'       =>   null,
            'tgl_6'       =>   null,
            'tgl_7'       =>   null,
            'tgl_8'       =>   null,
            'tgl_9'       =>   null,
            'tgl_10'       =>   null,
            'tgl_11'       =>   null,
            'tgl_12'       =>   null,
            'tgl_13'       =>   null,
            'tgl_14'       =>   null,
            'tgl_15'       =>   null,
            'tgl_16'       =>   null,
            'tgl_17'       =>   null,
            'tgl_18'       =>   null,
            'tgl_19'       =>   null,
            'tgl_20'       =>   null,
            'tgl_21'       =>   null,
            'tgl_22'       =>   null,
            'tgl_23'       =>   null,
            'tgl_24'       =>   null,
            'tgl_25'       =>   null,
            'tgl_26'       =>   null,
            'tgl_27'       =>   null,
            'tgl_28'       =>   null,
            'tgl_29'       =>   null,
            'tgl_30'       =>   null,
            'tgl_31'       =>   null,
            ]);
            return redirect()->route('presensi')->with('info', 'Reset Data Presensi Berhasil!');
            
        }    
        
        public function storepresensi(Request $request)
        {
            if(count($request->id)>0){
                foreach ($request->id as $key => $value) {
                    $data = array(
                    'tgl_1'       =>   $request->tgl_1[$key],
                    'tgl_2'       =>   $request->tgl_2[$key],
                    'tgl_3'       =>   $request->tgl_3[$key],
                    'tgl_4'       =>   $request->tgl_4[$key],
                    'tgl_5'       =>   $request->tgl_5[$key],
                    'tgl_6'       =>   $request->tgl_6[$key],
                    'tgl_7'       =>   $request->tgl_7[$key],
                    'tgl_8'       =>   $request->tgl_8[$key],
                    'tgl_9'       =>   $request->tgl_9[$key],
                    'tgl_10'       =>   $request->tgl_10[$key],
                    'tgl_11'       =>   $request->tgl_11[$key],
                    'tgl_12'       =>   $request->tgl_12[$key],
                    'tgl_13'       =>   $request->tgl_13[$key],
                    'tgl_14'       =>   $request->tgl_14[$key],
                    'tgl_15'       =>   $request->tgl_15[$key],
                    'tgl_16'       =>   $request->tgl_16[$key],
                    'tgl_17'       =>   $request->tgl_17[$key],
                    'tgl_18'       =>   $request->tgl_18[$key],
                    'tgl_19'       =>   $request->tgl_19[$key],
                    'tgl_20'       =>   $request->tgl_20[$key],
                    'tgl_21'       =>   $request->tgl_21[$key],
                    'tgl_22'       =>   $request->tgl_22[$key],
                    'tgl_23'       =>   $request->tgl_23[$key],
                    'tgl_24'       =>   $request->tgl_24[$key],
                    'tgl_25'       =>   $request->tgl_25[$key],
                    'tgl_26'       =>   $request->tgl_26[$key],
                    'tgl_27'       =>   $request->tgl_27[$key],
                    'tgl_28'       =>   $request->tgl_28[$key],
                    'tgl_29'       =>   $request->tgl_29[$key],
                    'tgl_30'       =>   $request->tgl_30[$key],
                    'tgl_31'       =>   $request->tgl_31[$key],
                );
                $presensi = Presensi::where('id', $request->id[$key])->first();
                $presensi->update($data);
                }
            }
        return redirect()->route('presensi')->with('success', 'Edit Data Presensi Berhasil!');
    }
    public function exportpresensi(Request $request)
    {
        $bulan = $request->route('presensi');
        return Excel::download(new PresensiExport($bulan), 'PRESENSI-GRADE '.auth()->user()->grade.'-'.$bulan.'.xlsx');
    }
    public function hadir($request){
        $i = 0;
        if ($request->tgl_1 =='v')
        $i=$i+1;
        if ($request->tgl_2 =='v')
        $i=$i+1;
        if ($request->tgl_3 =='v')
        $i=$i+1;
        if ($request->tgl_4 =='v')
        $i=$i+1;
        if ($request->tgl_5 =='v')
        $i=$i+1;
        if ($request->tgl_6 =='v')
        $i=$i+1;
        if ($request->tgl_7 =='v')
        $i=$i+1;
        if ($request->tgl_8 =='v')
        $i=$i+1;
        if ($request->tgl_9 =='v')
        $i=$i+1;
        if ($request->tgl_10 =='v')
        $i=$i+1;
        if ($request->tgl_11 =='v')
        $i=$i+1;
        if ($request->tgl_12 =='v')
        $i=$i+1;
        if ($request->tgl_13 =='v')
        $i=$i+1;
        if ($request->tgl_14 =='v')
        $i=$i+1;
        if ($request->tgl_15 =='v')
        $i=$i+1;
        if ($request->tgl_16 =='v')
        $i=$i+1;
        if ($request->tgl_17 =='v')
        $i=$i+1;
        if ($request->tgl_18 =='v')
        $i=$i+1;
        if ($request->tgl_19 =='v')
        $i=$i+1;
        if ($request->tgl_20 =='v')
        $i=$i+1;
        if ($request->tgl_21 =='v')
        $i=$i+1;
        if ($request->tgl_22 =='v')
        $i=$i+1;
        if ($request->tgl_23 =='v')
        $i=$i+1;
        if ($request->tgl_24 =='v')
        $i=$i+1;
        if ($request->tgl_25 =='v')
        $i=$i+1;
        if ($request->tgl_26 =='v')
        $i=$i+1;
        if ($request->tgl_27 =='v')
        $i=$i+1;
        if ($request->tgl_28 =='v')
        $i=$i+1;
        if ($request->tgl_29 =='v')
        $i=$i+1;
        if ($request->tgl_30 =='v')
        $i=$i+1;
        if ($request->tgl_31 =='v')
        $i=$i+1;
        return $i;
    }
    public function sakit($request){
        $i = 0;
        if ($request->tgl_1 =='s')
        $i=$i+1;
        if ($request->tgl_2 =='s')
        $i=$i+1;
        if ($request->tgl_3 =='s')
        $i=$i+1;
        if ($request->tgl_4 =='s')
        $i=$i+1;
        if ($request->tgl_5 =='s')
        $i=$i+1;
        if ($request->tgl_6 =='s')
        $i=$i+1;
        if ($request->tgl_7 =='s')
        $i=$i+1;
        if ($request->tgl_8 =='s')
        $i=$i+1;
        if ($request->tgl_9 =='s')
        $i=$i+1;
        if ($request->tgl_10 =='s')
        $i=$i+1;
        if ($request->tgl_11 =='s')
        $i=$i+1;
        if ($request->tgl_12 =='s')
        $i=$i+1;
        if ($request->tgl_13 =='s')
        $i=$i+1;
        if ($request->tgl_14 =='s')
        $i=$i+1;
        if ($request->tgl_15 =='s')
        $i=$i+1;
        if ($request->tgl_16 =='s')
        $i=$i+1;
        if ($request->tgl_17 =='s')
        $i=$i+1;
        if ($request->tgl_18 =='s')
        $i=$i+1;
        if ($request->tgl_19 =='s')
        $i=$i+1;
        if ($request->tgl_20 =='s')
        $i=$i+1;
        if ($request->tgl_21 =='s')
        $i=$i+1;
        if ($request->tgl_22 =='s')
        $i=$i+1;
        if ($request->tgl_23 =='s')
        $i=$i+1;
        if ($request->tgl_24 =='s')
        $i=$i+1;
        if ($request->tgl_25 =='s')
        $i=$i+1;
        if ($request->tgl_26 =='s')
        $i=$i+1;
        if ($request->tgl_27 =='s')
        $i=$i+1;
        if ($request->tgl_28 =='s')
        $i=$i+1;
        if ($request->tgl_29 =='s')
        $i=$i+1;
        if ($request->tgl_30 =='s')
        $i=$i+1;
        if ($request->tgl_31 =='s')
        $i=$i+1;
        return $i;
    }
    public function izin($request){
        $i = 0;
        if ($request->tgl_1 =='i')
        $i=$i+1;
        if ($request->tgl_2 =='i')
        $i=$i+1;
        if ($request->tgl_3 =='i')
        $i=$i+1;
        if ($request->tgl_4 =='i')
        $i=$i+1;
        if ($request->tgl_5 =='i')
        $i=$i+1;
        if ($request->tgl_6 =='i')
        $i=$i+1;
        if ($request->tgl_7 =='i')
        $i=$i+1;
        if ($request->tgl_8 =='i')
        $i=$i+1;
        if ($request->tgl_9 =='i')
        $i=$i+1;
        if ($request->tgl_10 =='i')
        $i=$i+1;
        if ($request->tgl_11 =='i')
        $i=$i+1;
        if ($request->tgl_12 =='i')
        $i=$i+1;
        if ($request->tgl_13 =='i')
        $i=$i+1;
        if ($request->tgl_14 =='i')
        $i=$i+1;
        if ($request->tgl_15 =='i')
        $i=$i+1;
        if ($request->tgl_16 =='i')
        $i=$i+1;
        if ($request->tgl_17 =='i')
        $i=$i+1;
        if ($request->tgl_18 =='i')
        $i=$i+1;
        if ($request->tgl_19 =='i')
        $i=$i+1;
        if ($request->tgl_20 =='i')
        $i=$i+1;
        if ($request->tgl_21 =='i')
        $i=$i+1;
        if ($request->tgl_22 =='i')
        $i=$i+1;
        if ($request->tgl_23 =='i')
        $i=$i+1;
        if ($request->tgl_24 =='i')
        $i=$i+1;
        if ($request->tgl_25 =='i')
        $i=$i+1;
        if ($request->tgl_26 =='i')
        $i=$i+1;
        if ($request->tgl_27 =='i')
        $i=$i+1;
        if ($request->tgl_28 =='i')
        $i=$i+1;
        if ($request->tgl_29 =='i')
        $i=$i+1;
        if ($request->tgl_30 =='i')
        $i=$i+1;
        if ($request->tgl_31 =='i')
        $i=$i+1;
        return $i;
    }
    public function absen($request){
        $i = 0;
        if ($request->tgl_1 =='a')
        $i=$i+1;
        if ($request->tgl_2 =='a')
        $i=$i+1;
        if ($request->tgl_3 =='a')
        $i=$i+1;
        if ($request->tgl_4 =='a')
        $i=$i+1;
        if ($request->tgl_5 =='a')
        $i=$i+1;
        if ($request->tgl_6 =='a')
        $i=$i+1;
        if ($request->tgl_7 =='a')
        $i=$i+1;
        if ($request->tgl_8 =='a')
        $i=$i+1;
        if ($request->tgl_9 =='a')
        $i=$i+1;
        if ($request->tgl_10 =='a')
        $i=$i+1;
        if ($request->tgl_11 =='a')
        $i=$i+1;
        if ($request->tgl_12 =='a')
        $i=$i+1;
        if ($request->tgl_13 =='a')
        $i=$i+1;
        if ($request->tgl_14 =='a')
        $i=$i+1;
        if ($request->tgl_15 =='a')
        $i=$i+1;
        if ($request->tgl_16 =='a')
        $i=$i+1;
        if ($request->tgl_17 =='a')
        $i=$i+1;
        if ($request->tgl_18 =='a')
        $i=$i+1;
        if ($request->tgl_19 =='a')
        $i=$i+1;
        if ($request->tgl_20 =='a')
        $i=$i+1;
        if ($request->tgl_21 =='a')
        $i=$i+1;
        if ($request->tgl_22 =='a')
        $i=$i+1;
        if ($request->tgl_23 =='a')
        $i=$i+1;
        if ($request->tgl_24 =='a')
        $i=$i+1;
        if ($request->tgl_25 =='a')
        $i=$i+1;
        if ($request->tgl_26 =='a')
        $i=$i+1;
        if ($request->tgl_27 =='a')
        $i=$i+1;
        if ($request->tgl_28 =='a')
        $i=$i+1;
        if ($request->tgl_29 =='a')
        $i=$i+1;
        if ($request->tgl_30 =='a')
        $i=$i+1;
        if ($request->tgl_31 =='a')
        $i=$i+1;
        return $i;
    }
    public function riwayatpresensi()
    {
        $januari =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '1')->first();
        $februari =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '2')->first();
        $maret =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '3')->first();
        $april =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '4')->first();
        $mei =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '5')->first();
        $juni =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '6')->first();
        $juli =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '7')->first();
        $agustus =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '8')->first();
        $september =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '9')->first();
        $oktober =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '10')->first();
        $november =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '11')->first();
        $desember =  DB::table('presensi')->where('nis', auth()->user()->nis)->where('bulan', '12')->first();
        // dd($januari);
        $januari_v = $this->hadir($januari);
        $januari_i = $this->izin($januari);
        $januari_a = $this->absen($januari);
        $januari_s = $this->sakit($januari);
        
        $februari_v = $this->hadir($februari);
        $februari_i = $this->izin($februari);
        $februari_a = $this->absen($februari);
        $februari_s = $this->sakit($februari);
        
        $maret_v = $this->hadir($maret);
        $maret_i = $this->izin($maret);
        $maret_a = $this->absen($maret);
        $maret_s = $this->sakit($maret);
        
        $april_v = $this->hadir($april);
        $april_i = $this->izin($april);
        $april_a = $this->absen($april);
        $april_s = $this->sakit($april);
        
        $mei_v = $this->hadir($mei);
        $mei_i = $this->izin($mei);
        $mei_a = $this->absen($mei);
        $mei_s = $this->sakit($mei);
        
        $juni_v = $this->hadir($juni);
        $juni_i = $this->izin($juni);
        $juni_a = $this->absen($juni);
        $juni_s = $this->sakit($juni);
        
        $juli_v = $this->hadir($juli);
        $juli_i = $this->izin($juli);
        $juli_a = $this->absen($juli);
        $juli_s = $this->sakit($juli);
        
        $agustus_v = $this->hadir($agustus);
        $agustus_i = $this->izin($agustus);
        $agustus_a = $this->absen($agustus);
        $agustus_s = $this->sakit($agustus);
        
        $september_v = $this->hadir($september);
        $september_i = $this->izin($september);
        $september_a = $this->absen($september);
        $september_s = $this->sakit($september);
        
        $oktober_v = $this->hadir($oktober);
        $oktober_i = $this->izin($oktober);
        $oktober_a = $this->absen($oktober);
        $oktober_s = $this->sakit($oktober);
        
        $november_v = $this->hadir($november);
        $november_i = $this->izin($november);
        $november_a = $this->absen($november);
        $november_s = $this->sakit($november);
        
        $desember_v = $this->hadir($desember);
        $desember_i = $this->izin($desember);
        $desember_a = $this->absen($desember);
        $desember_s = $this->sakit($desember);
        
        


        return view('/parent/presensi',
        [
            'januari_v'=>$januari_v, 'januari_s'=>$januari_s, 'januari_i'=>$januari_i, 'januari_a'=>$januari_a,
            'februari_v'=>$februari_v, 'februari_s'=>$februari_s, 'februari_i'=>$februari_i, 'februari_a'=>$februari_a,
            'maret_v'=>$maret_v, 'maret_s'=>$maret_s, 'maret_i'=>$maret_i, 'maret_a'=>$maret_a,
            'april_v'=>$april_v, 'april_s'=>$april_s, 'april_i'=>$april_i, 'april_a'=>$april_a,
            'mei_v'=>$mei_v, 'mei_s'=>$mei_s, 'mei_i'=>$mei_i, 'mei_a'=>$mei_a,
            'juni_v'=>$juni_v, 'juni_s'=>$juni_s, 'juni_i'=>$juni_i, 'juni_a'=>$juni_a,
            'juli_v'=>$juli_v, 'juli_s'=>$juli_s, 'juli_i'=>$juli_i, 'juli_a'=>$juli_a,
            'agustus_v'=>$agustus_v, 'agustus_s'=>$agustus_s, 'agustus_i'=>$agustus_i, 'agustus_a'=>$agustus_a,
            'september_v'=>$september_v, 'september_s'=>$september_s, 'september_i'=>$september_i, 'september_a'=>$september_a,
            'oktober_v'=>$oktober_v, 'oktober_s'=>$oktober_s, 'oktober_i'=>$oktober_i, 'oktober_a'=>$oktober_a,
            'november_v'=>$november_v, 'november_s'=>$november_s, 'november_i'=>$november_i, 'november_a'=>$november_a,
            'desember_v'=>$desember_v, 'desember_s'=>$desember_s, 'desember_i'=>$desember_i, 'desember_a'=>$desember_a,
        
        ]);
    }
    
}
