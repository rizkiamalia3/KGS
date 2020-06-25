<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    protected $table = 'doctors';
    protected $primaryKey = 'doctor_id';


    protected $fillable = [
        'name','email','hari_praktek'
    ];
}
