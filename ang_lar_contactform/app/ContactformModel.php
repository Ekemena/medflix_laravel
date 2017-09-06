<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactformModel extends Model
{
    //
    protected $fillable = array('id', 'name', 'email', 'course','message');
}
