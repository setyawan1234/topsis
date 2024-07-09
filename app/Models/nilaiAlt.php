<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaiAlt extends Model
{
    protected $table = 'nilai_alts';
    protected $primaryKey = 'nilai_alt_id';

    protected $fillable = [
        'alternatif_id',
        'kriteria_id',
        'value',
        'subkriteria_id'
    ];

    public function getKodeKriteriaAsStringAttribute()
    {
        return 'C' . $this->attributes['kriteria_id'];
    }

    public function getKodeAlternatifAsStringAttribute()
    {
        return 'A' . $this->attributes['alternatif_id'];
    }

    public function alternatif()
    {
        return $this->belongsTo(alternatif::class, 'alternatif_id', 'kode_alternatif');
    }

    public function kriteria()
    {
        return $this->belongsTo(kriteria::class, 'kriteria_id', 'kode_kriteria');
    }

    public function subkriteria(){
        return $this->belongsTo(subkriteria::class, 'subkriteria_id', 'id');
    }
    
    public function nilai()
    {
        return $this->belongsTo(nilaiAlt::class, 'alternatif_id', 'alternatif_id');
    }

}
