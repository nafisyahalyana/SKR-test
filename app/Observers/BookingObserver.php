<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Support\Facades\DB;

class BookingObserver
{
    public function updated(Booking $booking)
    {
        // Check if the booking end time has passed
        if ($booking->waktu_berakhir <= now()) {
            $ruangan = Ruangan::find($booking->ruangan_id);
            $ruangan->status = 0;
            $ruangan->save();
        }
    }
}
