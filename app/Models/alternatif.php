<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    protected $table = 'alternatifs';
    protected $primaryKey = 'kode_alternatif';

    protected $fillable = [
        'kode_alternatif',
        'nama_alternatif',
    ];
    public function getKodeAlternatifAsStringAttribute()
    {
        return 'A' . $this->attributes['kode_alternatif'];
    }
    public function nilai_alt()
    {
        return $this->hasMany(nilaiAlt::class, 'alternatif_id', 'kode_alternatif');
    }
}
