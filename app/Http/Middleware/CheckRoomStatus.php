<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoomStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $bookings = Booking::where('waktu_berakhir', '<=', now())->get();

        foreach ($bookings as $booking) {
            $ruangan = Ruangan::find($booking->ruangan_id);
            // Hanya ubah status menjadi 0 jika waktu_berakhir telah terlewati
            if ($ruangan->status == 1 && $booking->waktu_berakhir <= now()) {
                $ruangan->status = 0;
                $ruangan->save();
            }
        }
        return $next($request);
    }
}
