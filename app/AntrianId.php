<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianId extends Model
{
    protected $primaryKey = 'id_antri';

    protected $fillable = [
        'tgl_antri',
    ];
    public function user()
	{
	      return $this->belongsTo('App\User','user_id', 'user_id');
    }

    public function antrian_number()
	{
	     return $this->hasMany('App\AntrianNumber','id_no', 'id_no');
	}
}
