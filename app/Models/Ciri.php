<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciri extends Model
{
    use HasFactory;

    protected $table = 'ciri';

    public $timestamps = false;

    protected $fillable = [
        'kode',
        'ciri'
    ];

    public function ciri()
    {
        return $this->hasMany(Rulegejala::class);
    }
}
