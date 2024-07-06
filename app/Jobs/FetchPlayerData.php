<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;

class FetchPlayerData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $player_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($player_id)
    {
        $this->player_id = $player_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $battingResponse = cricketAPI("/stats/v1/player/".$this->player_id."/batting");
        $bowlingResponse = cricketAPI("/stats/v1/player/".$this->player_id."/bowling");
        $careerResponse = cricketAPI("/stats/v1/player/".$this->player_id."/career");

        if ($battingResponse->successful()) {
            Cache::put("player_{$this->player_id}_batting", $battingResponse->json(), now()->addMinutes(30));
        }

        if ($bowlingResponse->successful()) {
            Cache::put("player_{$this->player_id}_bowling", $bowlingResponse->json(), now()->addMinutes(30));
        }

        if ($careerResponse->successful()) {
            Cache::put("player_{$this->player_id}_career", $careerResponse->json(), now()->addMinutes(30));
        }
    }
}
