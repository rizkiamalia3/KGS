<?php

namespace App\Http\Controllers;


use App\User;
use App\Appointment;
use App\AppointmentDetail;
use App\AntrianId;
use App\AntrianNumber;
use Auth;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();
        //Cek Data Diri
        if(empty($user->no_hp))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('user/profile');
        }

        if(empty($user->tgl_lahir))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('user/profile');
        }

        if(empty($user->jenis_kelamin))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('user/profile');
        }
        return view('user.appointment');
    }

    public function reserve(Request $request)
    {
        //nambah data antrian id
        $antrianId = AntrianId::where("tgl_antri",$request->tgl_antri)->first();
        //cek data antrian
        if(empty($antrianId)){
           $antrianId = new AntrianId;
           $antrianId->tgl_antri = $request->tgl_antri;
           $antrianId->save();
        }
        else{
           $antrianId = new AntrianId;
           $antrianId->tgl_antri = $request->tgl_antri;
           $antrianId->save();
        }
        
        //cek no antri pada tanggal yang direservasi
        $antrianNumber = AntrianNumber::where('id_antri', $antrianId->id_antri)->first();
        $antrianTgl = AntrianId::where('tgl_antri', $antrianId->tgl_antri)->get();
        $def = 0;
        foreach($antrianTgl as $aT){
            $def = $def+1;
        }
        $Ai = AntrianId::where("tgl_antri",$request->tgl_antri)->get();
        $nol = 0;
        foreach($Ai as $A){
            $nol = $nol+1;
        }
        // cek data 
        $antrianNumber = new AntrianNumber;
        if(empty($antrianId)){
            $antrianNumber->no_antri = 1;
        }
        else{
            if($nol >= 15){
                alert()->error('Maaf Reservasi Pada Tanggal Yang Anda Daftarkan Telah Penuh,
                 Tolong Reservasi Di Lain Hari Terima Kasih', 'Error');
                return back();
              }
              else{
                  $antrianNumber->no_antri = $nol;
              }
        }
        $antrianNumber->id_antri = $antrianId->id_antri;
        $antrianNumber->save();

        $cek_reverse = Appointment::where('user_id', Auth::user()->user_id)->first();
        //simpen ke database tabel appointment
        if(empty($cek_reverse))
        {
            $appointment = new Appointment;
            $appointment->user_id = Auth::user()->user_id;
            $appointment->save();
        }

        $new_app = Appointment::where('user_id', Auth::user()->user_id)->first();

        $cek_app_detail = AppointmentDetail::where('id_antri',$antrianNumber->id_antri)
        ->where('id_no',$antrianNumber->id_no)->where('appointment_id',$new_app->appointment_id)->where('status',0)->first();
        if(empty($cek_app_detail)){
            $app_detail = new AppointmentDetail;
            $app_detail->appointment_id = $new_app->appointment_id;
            $app_detail->id_no = $antrianNumber->id_no;
            $app_detail->id_antri = $antrianId->id_antri;
            $app_detail->status = 0;
            $app_detail->save();
        }
        alert()->success('Sukses Reservasi', 'Success');
        return redirect('user/appointment-confirm-detail');
    }

    public function confirm()
    {
        //perintah konfirmasi kehadiran
        $appointment = Appointment::where('user_id', Auth::user()->user_id)->get();
        foreach($appointment as $app){
            $appointment_details = AppointmentDetail::where('appointment_id',$app->appointment_id)->where('status',0)->get();
            AppointmentDetail::where('status', 0)
            ->where('appointment_id', $app->appointment_id)
            ->update(['status' => 1]);
        }
        $appointment_details = AppointmentDetail::where('appointment_id',$app->appointment_id)->where('status',1)->get();
        foreach($appointment_details as $app_detail){
        }
        alert()->success('Sukses Reservasi', 'Success');

        return redirect('user/history/'.$app_detail->id);
    }
}
