<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $primaryKey = 'kode_mk';  // Assuming 'kode_mk' is the primary key

    
    protected $fillable = ['kode_mk', 'nama', 'sks', 'plot_semester','jenis'];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class, 'kode_mk', 'kode_mk');
    }
}
