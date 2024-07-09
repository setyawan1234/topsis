<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkriteria extends Model
{
    protected $table = 'subkriterias';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_subkriteria',
        'bobot_subkriteria',
        'kode_kriteria'
    ];

    public function kriteria()
    {
        return $this->belongsTo(kriteria::class, 'kode_kriteria', 'kode_kriteria');
    }
}
