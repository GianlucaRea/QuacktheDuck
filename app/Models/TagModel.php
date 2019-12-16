<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = "tags";
    protected $fillable = [
        'tag_name',
    ];

}
