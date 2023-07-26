<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'log';
    protected $fillable = [
        'id',
        'tanggal',
        'waktu',
        'koordinat_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function koordinat()
    {
        return $this->belongsTo(Koordinat::class, 'koordinat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopejoinList($query)
    {
        return $query
            ->leftJoin('koordinat as model_a', 'log.koordinat_id', '=', 'model_a.id')
            ->leftJoin('user as model_b', 'log.user_id', '=', 'model_b.id')
            ->select(
                'log.id',
                'log.tanggal',
                'log.waktu',
                'model_a.titik_lintang as lintang',
                'model_a.titik_bujur as bujur',
                'model_b.nama',
                'log.created_at',
                'log.updated_at',
            );
    }
}
