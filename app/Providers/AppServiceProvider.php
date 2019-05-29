<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Monolog\Handler\AbstractProcessingHandler;


class AppServiceProvider extends ServiceProvider
{
  
    public function register()
    {
        //
    }

   
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}

// class JobLogDbHandler extends AbstractProcessingHandler
// {
//     protected function write(array $record)
//     {
//         $jobContext = Config::get('jobs.context');
//         if($jobContext){
//             DB::table('job_logs')->insert([
            // 'loggable_id'=>$jobContext['id'],
            // 'loggable_type'=>$jobContext['type'],
            // 'message' => $record['message'],
            // 'level' => $record['level_name'],
            // 'context' => json_encode($record['context'] ?? []),
            // 'extra' => json_encode($record['extra']??[]),
//             'started_at' => $record['datetime']->format('Y-m-d H:i:s'),
//             ]);
//         }
//     }
// }