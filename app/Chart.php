<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{

    protected $table = 'chart';

    protected $fillable = ['member_id', 'goal','assist','clean_sheet'];
}