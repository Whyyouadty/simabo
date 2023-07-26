<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    use HasFactory;
    protected $table = 'gate';
    protected $fillable = [
        'id',
        'no_sesi',
        'start',
        'end',
        'created_at',
        'updated_at'
    ];
}
