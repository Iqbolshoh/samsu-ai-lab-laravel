<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollaborationForm extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'organization',
        'collaboration_type',
        'message',
    ];
}
