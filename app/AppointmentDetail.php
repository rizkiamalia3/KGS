<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentDetail extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'status',
    ];
    public function appointment()
	{
	      return $this->belongsTo('App\Appointment','appointment_id', 'appointment_id');
    }

    public function antrian_number(){
        return $this->belongsTo('App\AntrianNumber','id_no','id_no');
    }
}
