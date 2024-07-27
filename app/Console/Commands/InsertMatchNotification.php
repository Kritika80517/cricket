<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;

class InsertMatchNotification extends Command
{
    protected $signature = 'insert:match-notification';
    protected $description = 'Insert today\'s match notification';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $res = cricketAPI("/schedule/v1/international");
        $response = [];
        if ($res->successful()) {
            $response = $res->json();
        }
        $today = Carbon::now()->format('D, M d Y');
        if($response){
            foreach ($response['matchScheduleMap'] as $schedule) {

                if (isset($schedule['scheduleAdWrapper']) && $schedule['scheduleAdWrapper']['date'] == strtoupper($today)) {
                    foreach ($schedule['scheduleAdWrapper']['matchScheduleList'] as $match) {
                        foreach ($match['matchInfo'] as $info) {
                            $startDateTimestamp = $info['startDate'] / 1000;

                            $startDateTimestamp = $info['startDate'] / 1000;

                            $sendAt = Carbon::createFromTimestamp($startDateTimestamp)->subMinutes(5);
                            $startAt = Carbon::createFromTimestamp($startDateTimestamp);
                            
                            $sendAtFormatted = $sendAt->toDateTimeString();
                            $startAtFormatted = $startAt->toDateTimeString();
                            DB::table('match_notifications')->insert([
                                'title' => "Upcoming match alert : " . $info['team1']['teamName'] .' vs '.$info['team2']['teamName'],
                                'message' => "Match starts at " . $startAtFormatted . ". Set Your reminder and don't miss the action!",
                                'send_at' => $sendAtFormatted,
                                'status' => 0,
                                'match_type' => strtolower($match['seriesCategory']),
                                'created_at' => now(),
                                'updated_at' => now()
                            ]);
                        }
                    }
                }
            }
        }

        $league = cricketAPI("/schedule/v1/league");
        $league_response = [];
        if ($league->successful()) {
            $league_response = $league->json();
        }
        $today = Carbon::now()->format('D, M d Y');
        if($league_response){
            foreach ($league_response['matchScheduleMap'] as $schedule) {
                if (isset($schedule['scheduleAdWrapper']) && $schedule['scheduleAdWrapper']['date'] == strtoupper($today)) {
                    foreach ($schedule['scheduleAdWrapper']['matchScheduleList'] as $match) {
                        foreach ($match['matchInfo'] as $info) {
                            $sendAt = Carbon::createFromTimestamp($info['startDate'] / 1000)->subMinutes(5);
                            DB::table('match_notifications')->insert([
                                'title' => "Upcoming match alert : " . $info['team1']['teamName'] .' vs '.$info['team2']['teamName'],
                                'message' => "Match starts at " . $startAt . ". Set Your reminder and don't miss the action!",
                                'send_at' => $sendAt,
                                'status' => 0,
                                'match_type' => strtolower($match['seriesCategory']),
                                'created_at' => now(),
                                'updated_at' => now()
                            ]);
                        }
                    }
                }
            }
        }

        $this->info('Match notification inserted successfully.');
    }
}
