<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    // Nama tabel di database
    protected $table = 'wisata';

    // Primary key dari tabel
    protected $primaryKey = 'id_wisata';

    // Menonaktifkan timestamps
    public $timestamps = false;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'kota', 'landmark', 'tarif',
    ];

    /**
     * Atribut yang disembunyikan dari representasi JSON.
     *
     * @var array
     */
    protected $hidden = [];
}
