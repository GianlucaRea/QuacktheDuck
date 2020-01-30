<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public $timestamps = false;
    protected $table = "statistics";
    protected $fillable = [
        'id_user'
    ];


    public function user()
    {
        return $this->hasMany('App/User', 'id_user');
    }


}
