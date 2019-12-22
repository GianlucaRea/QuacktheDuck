<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    public $timestamps = false;
    protected $table = "admins";
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];
}
