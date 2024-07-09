<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $table = 'kriterias';
    protected $primaryKey = 'kode_kriteria';

    protected $fillable = [
        'kode_kriteria',
        'nama_kriteria',
        'bobot_kriteria',
        'attribute',
    ];
    public function getKodeKriteriaAsStringAttribute()
    {
        return 'C' . $this->attributes['kode_kriteria'];
    }

    public function nilai_alt(){
        return $this -> hasMany(nilaiAlt::class, 'kriteria_id', 'kode_kriteria');
    }

    public function subkriteria()
    {
        return $this->hasMany(subkriteria::class, 'kode_kriteria', 'kode_kriteria');
    }

}
