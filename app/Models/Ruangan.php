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
    protected $fillable = [
        'id',
        'ruangan',
        'status' => 0, // Set role_id to 2 for new users
    ];
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id');
    }
   
}
