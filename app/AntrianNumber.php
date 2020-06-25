<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianNumber extends Model
{

    protected $primaryKey = 'id_no';

    protected $fillable = [
        'no_antri',
    ];
    public function user()
	{
	      return $this->belongsTo('App\User','user_id', 'user_id');
    }

    public function appointment_detail()
	{
	     return $this->hasMany('App\AppointmentDetail','appointment_id', 'appointment_id');
    }
}
