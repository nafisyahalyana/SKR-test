<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = 'ruangan';

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
