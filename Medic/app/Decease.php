<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Decease extends Authenticatable
{
	use Notifiable;

    public function user(){
    	return $this->belongsTo('app\User');
    }
}