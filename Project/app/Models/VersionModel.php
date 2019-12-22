<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VersionModel extends Model
{
    public $timestamps = false;
     protected $table = "versions";
     protected $fillable  = [
         'id_document',
       'version_number',
     ];
}
