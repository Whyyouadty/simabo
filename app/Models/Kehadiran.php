<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'kehadiran';
    protected $fillable = [
        'id',
        'user_id',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'status',
        'keterangan',
        'gate_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function gate()
    {
        return $this->belongsTo(Gate::class, 'gate_id');
    }

    public function scopejoinList($query)
    {
        return $query
            ->leftJoin('user as model_a', 'kehadiran.user_id', '=', 'model_a.id')
            ->leftJoin('gate as model_b', 'kehadiran.gate_id', '=', 'model_b.id')
            ->select(
                'kehadiran.id',
                'model_a.nama',
                'kehadiran.tanggal',
                'kehadiran.jam_masuk',
                'kehadiran.jam_keluar',
                'kehadiran.status',
                'kehadiran.keterangan',
                'model_b.no_sesi as sesi',
                'user.created_at',
                'user.updated_at',
            );
    }
}
