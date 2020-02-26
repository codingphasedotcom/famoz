<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
