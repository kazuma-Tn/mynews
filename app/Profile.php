<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $guarded = array('id');
    
    // 課題５
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
