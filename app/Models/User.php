<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        'id',
        'akun_id',
        'nama',
        'nidn',
        'departement_id',
        'jabatan_id',
        'ttl',
        'alamat',
        'agama',
        'jk',
        'no_hp',
        'created_at',
        'updated_at'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function scopejoinList($query)
    {
        return $query
            ->leftJoin('akun as model_a', 'user.akun_id', '=', 'model_a.id')
            ->leftJoin('departement as model_b', 'user.departement_id', '=', 'model_b.id')
            ->leftJoin('jabatan as model_c', 'user.jabatan_id', '=', 'model_c.id')
            ->select(
                'user.id',
                'model_a.username as user',
                'user.nama',
                'user.nidn',
                'model_b.nama_departement as departement',
                'model_c.nama_jabatan as jabatan',
                'user.ttl',
                'user.alamat',
                'user.agama',
                'user.jk',
                'user.no_hp',
                'user.created_at',
                'user.updated_at',
            );
    }
}
