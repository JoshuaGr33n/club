<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccountModel extends Model
{
    protected $table = 'users';
    protected $fillable = [
       'fname', 'lname', 'phone', 'email', 'occupation', 'dob', 'username','gender', 'pic','status','password','created_at'
    ];

    protected $attributes = [
          'pic' => '', 'username' => '', 'status' => '',
    ];


    
}