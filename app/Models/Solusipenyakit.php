<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusipenyakit extends Model
{
    use HasFactory;

    protected $table = 'solusi_penyakit';

    public $timestamps = false;

    protected $fillable = [
        'penyakit_id',
        'solusi'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
