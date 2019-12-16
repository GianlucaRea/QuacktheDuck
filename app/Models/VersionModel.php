<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VersionModel extends Model
{
     protected $table = "versions";
     protected $fillable  = [
       'version_number',
     ];
}
