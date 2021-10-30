<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectiveMembers extends Model
{
  protected $table = 'prospective_members';
  
   protected $fillable = [
    'id', 'email','token'
   ];
  


}