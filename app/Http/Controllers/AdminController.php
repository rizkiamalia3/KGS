<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\User;
use App\Doctor;
use App\Appointment;
use App\AppointmentDetail;
use App\AntrianNumber;
use App\Slider;
use DB;
use Image;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->join('users','appointments.user_id','=','users.user_id')
        ->where('status','=','1')
        ->count();
        return view('admin.admin',compact('appointment_details'));
    }


     //Proses Admin
     public function data_admin(){
        $data_admin = Admin::all();
        return view('admin.data_admin',['data_admin'=> $data_admin]);
    }
    public function tambah_data_admin(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
        ]);
        $data_admin = new Admin;
        $data_admin->name =$request->name;
        $data_admin->email =$request->email;
        $data_admin->password = bcrypt($request->password);
        $data_admin->save();
        alert()->success('Sukses Menambahkan Admin', 'Sukses');
        return redirect('/admin/data_admin');

    }
    public function delete_admin($id){
        $data_admin = Admin::find($id);
        $data_admin->delete($data_admin);
        alert()->error('Sukses Menghapus Data Admin', 'Sukses');
        return redirect('/admin/data_admin');
    }

    //Proses User
    public function data_user(){
        $users = User::all();
        return view('admin.data_user',['users'=> $users]);
    }
    public function user_profile($id){
        $user = User::find($id);
        return view('admin.user_profile',['user'=> $user]);
    }

    public function delete_user($id){
        $data_user = User::find($id);
        $data_user->delete($data_user);
        alert()->error('Sukses Delete Data User', 'Success');
        return redirect('/admin/data_user');
    }

    // Data Dokter
    public function data_doctor(){
        $doctors = Doctor::all();
        return view('admin.data_doctor',['doctors'=> $doctors]);
    }
    public function doctor_profile($id){
        $doctors = Doctor::find($id);
        return view('admin.doctor_profile',['doctors'=> $doctors]);
    }
    public function tambah_data_doctor(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'hari_praktek' => 'required',
        ]);
        $data_doctor = new Doctor;
        $data_doctor->name =$request->name;
        $data_doctor->email =$request->email;
        $data_doctor->hari_praktek = $request->hari_praktek;
        $data_doctor->save();
        alert()->success('Sukses Menambahkan Data Dokter', 'Sukses');
        return redirect('/admin/data_doctor');

    }
    public function doctor_update(Request $request, $id){
        $doctors = Doctor::find($id);
    	$doctors->name = $request->name;
    	$doctors->email = $request->email;
        $doctors->hari_praktek = $request->hari_praktek;

    	$doctors->update();

    	alert()->success('Data Sukses diupdate', 'Success');
    	return back();
    }

    public function delete_doctor($id){
        $data_doctor = Doctor::find($id);
        $data_doctor->delete($data_doctor);
        alert()->error('Sukses Delete Data Dokter', 'Success');
        return redirect('/admin/data_doctor');
    }

    public function data_reserve(){
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->join('users','appointments.user_id','=','users.user_id')
        ->orderBy('tgl_antri','ASC')
        ->orderBy('no_antri','ASC')
        ->get();
        return view('admin.data_reserve',compact('appointment_details'));
    }

    public function new_reserve(){
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->join('users','appointments.user_id','=','users.user_id')
        ->orderBy('tgl_antri','ASC')
        ->orderBy('no_antri','ASC')
        ->where('status','=','1')
        ->paginate(10);
        return view('admin.new_reserve',compact('appointment_details'));
    }

    public function reserve($id){
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->join('users','appointments.user_id','=','users.user_id')
        ->where('appointment_details.id','=',$id)
        ->paginate(10);
        return view('admin.detail_reserve',compact('appointment_details'));
    }

    public function status_update(Request $request,$id){
        $data = array("status"=>$request->status);
        $data2= array("no_antri"=>$request->no_antri);
        $appointment_details = AppointmentDetail::find($id);
        AppointmentDetail::where('id',$id)->update($data);
        AntrianNumber::where('id_no',$appointment_details->id_no)->update($data2);
        alert()->success('Sukses Update Data Reservasi', 'Success');
        return back();
    }

    public function delete_reserve($id){
        $appointment_details = DB::table('appointment_details')
        ->join('antrian_ids','appointment_details.id_antri','=','antrian_ids.id_antri')
        ->join('antrian_numbers','appointment_details.id_no','=','antrian_numbers.id_no')
        ->join('appointments','appointment_details.appointment_id','=','appointments.appointment_id')
        ->join('users','appointments.user_id','=','users.user_id')
        ->where('appointment_details.id','=',$id)
        ->delete();
        alert()->error('Sukses Delete Data Dokter', 'Success');
        return back();
    }


    public function slider(){
        $sliders = \App\Slider::paginate(3);
        return view('admin.data_slider',['sliders'=> $sliders]);
    }

    public function tambah_data_slider(Request $request){
        $this->validate($request, [
            'images' => 'sometimes|image',
        ]);
        $sliders = new Slider;
        if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time(). '.'. $image->getClientOriginalExtension();
        $location = public_path('/images/sliders/' . $filename);
        Image::make($image)->resize(1920,650)->save($location);
        $sliders->image =$filename;
        }
        $sliders->save();
        return redirect('/admin/data_slider');

    }


    public function delete_slider($id){
        $sliders = \App\slider::find($id);
        $sliders->delete($sliders);
        Storage::delete($sliders->image);
        return back();
    }
}
