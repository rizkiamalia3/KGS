<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use DB;
use App\AppointmentDetail;
use App\AntrianId;
use App\AntrianNumber;
use Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $appointments = Appointment::where('user_id', Auth::user()->user_id)->get();
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->where('appointments.user_id','=',Auth::user()->user_id)
        ->paginate(10);
        return view('user.appointment_index',compact('appointment_details'));
    }

    public function detail($id)
    {
        $apps = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->where('appointment_details.id','=',$id)
        ->get();

        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->where('appointment_details.id','=',$id)
        ->get();
        return view('user.appointment_detail',compact('apps','appointment_details'));
    }


    public function confirm($id){
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->where('appointment_details.id','=',$id)
        ->update(['status' => 2]);
        alert()->success('Sukses Konfirmasi Reservasi', 'Sukses');
        return back();
    }

    public function delete($id)
    {
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->drop();

        alert()->error('Reservasi Sukses Dihapus', 'Hapus');
        return redirect('user/history');
    }
}

