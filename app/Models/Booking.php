<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string 
     * 
     */
    protected $table = 'booking';
    protected $fillable = [
        'id',
        'nama',
        'bidang',
        'no_hp',
        'tanggal',
        'waktu_mulai',
        'waktu_berakhir',
        'ruangan_id',
        'keperluan',
        'is_privat',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
    
    
}


