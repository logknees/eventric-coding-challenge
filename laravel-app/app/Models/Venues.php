<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'point_of_contact_email',
        'point_of_contact_phone',
        'country'
    ];
}
