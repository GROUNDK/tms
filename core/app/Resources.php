<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    //
    protected $table = 'resources';
    protected $fillable = ['onwer_id','owner_type','type'];
}
