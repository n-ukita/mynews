<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //以下を追記
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
        // 以下を追記
        // Profile Model　に関連付けを行う
        
        public function profile_histories()
        {
            return $this->hasMany('App\ProfileHistory');
        }    
}
