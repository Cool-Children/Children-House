<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $fillable = ['user_name' , 'email' , 'password'];
}
