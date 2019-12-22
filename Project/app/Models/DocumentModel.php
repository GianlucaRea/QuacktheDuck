<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentModel extends Model
{
    protected $table ="documents";
    protected $fillable = [
        'id',
        'id_user_document',
        'title',
        'highlighting',
        'university',
        'course',
        'subject',
        'source',
    ];
    public $timestamps = false;
}
