<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class UpdateRuanganStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ruangan:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update status ruangan yang waktu peminjamannya sudah berakhir';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $ruangan2 = Ruangan::where('status', 1)->get();

        foreach ($ruangan2 as $ruangan) {
            $booking = Booking::where('ruangan_id', $ruangan->id)
                ->where('waktu_berakhir', '<', Carbon::now())
                ->first();

            if ($booking) {
                $ruangan->status = 0;
                $ruangan->save();
            }
        }
        $this->update();

        // $this->info('Ruangan status updated successfully.');
    // $currentTime = Carbon::now()->format('H:i:s');

    //     // Tentukan kondisi waktu yang diinginkan
    //     $targetTime = '09:08:00'; // Misalnya jam 3 sore

    //     if ($currentTime == $targetTime) {
    //         $this->update();
    //     }
    }

    private function update()
    {
        // Implementasikan fungsi update di sini
        // Contoh: Memanggil model atau mengupdate database
        Log::info('Update function called at ' . now());
    }

    
    
}
