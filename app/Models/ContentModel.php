<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table = "contents";
    public $timestamps = false;
    protected $fillable = [
        'id',
       'type',
       'file',
    ];
}
