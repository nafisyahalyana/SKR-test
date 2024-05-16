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
    // protected $fillable = [
    //     'id',
    //     'ruangan'
    // ];
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
    
}


