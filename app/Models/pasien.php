<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    public function dokter()
    {

        return $this->belongsTo('App\Models\dokter', 'id_dokter');
    }
}
