<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiPaket extends Model {
    use HasFactory;

    protected $table = "isi_paket";

    protected $fillable = [
        'id_paket',
        'nama',
    ];
}
