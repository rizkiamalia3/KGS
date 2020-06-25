<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Slider extends Authenticatable
{
    use Notifiable;

    protected $table = 'sliders';
    protected $primaryKey = 'image_id';

    protected $fillable = [
        'images',
    ];

}
