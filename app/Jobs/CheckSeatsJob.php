<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Seat_hall_sanse;


class CheckSeatsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $statuses=Seat_hall_sanse::where('status_id',1)->get();
        foreach($statuses as $status){
            $status->status_id=3;
            $status->save();
          }
    }
}
