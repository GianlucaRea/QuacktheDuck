<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentModel extends Model
{
    protected $table ="documents";
    protected $fillable = [
        'document_id',
        'title',
        'highlighting',
        'university',
        'course',
        'subject',
        'source',
    ];
}
