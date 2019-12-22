<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    public $timestamps = false;
    protected $table = "tags";
    protected $fillable = [
        'id_document',
        'tag_name',
    ];

}
