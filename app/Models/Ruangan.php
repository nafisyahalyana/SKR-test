<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'ruangan';
    // protected $table = [
    //     // 'id',
    //     'ruangan',
    // ];
    // public function jadwals()
    // {
    //     return $this->hasMany(Jadwal::class);
    // }
}
