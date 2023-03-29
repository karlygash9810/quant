<?php

namespace App\Http\Controllers\Report;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Response;
use function Termwind\render;

class ReportController
{
    public function get()
    {
        $url = 'http://172.16.1.100/endpoint/v2/reports/full_report/get.php';
        $response = file_get_contents($url);
        $newsData = json_decode($response);
//        $employeer = EmployeerController::saveEmployeers($newsData);

//        $sql = DB::select('Select * from reports');
        $data =Report::all()->toArray();
        $new =[];
        foreach ($newsData as $value){
            $new[]=(array)$value;
            foreach ($new as $n){
                foreach ($data as $item){
                    dd(array_key_exists($n['subtask_id'], $item));
//                    if (array_key_exists($n['subtask_id'], $item)){
//                        $report = new Report();
//                        $report['subtask_id'] = $value->subtask_id;
//                        $report['b_task_id'] = $value->b_task_id;
//                        $report['user_id'] = $value->user_id;
//                        $report['time_estimated'] = $value->time_estimated;
//                        $report['time_spent'] = $value->time_spent;
//                        $report['productivity_factor'] = $value->productivity_factor;
//                        $report['effective_time'] = $value->effective_time;
//                        $report['status'] = $value->status;
//                        $report['user_b_id'] = $value->user_b_id;
//                        $report['planned_start'] = $value->planned_start;
//                        $report['planned_finish'] = $value->planned_finish;
//                        $report['updated'] = $value->updated;
//                        $report['username'] = $value->username;
//                        $report['weight'] = $value->weight;
//                        $report['operation_name'] = $value->operation_name;
//                        $report['currentTimerstate'] = $value->currentTimerstate;
//                        $report['pj_name'] = $value->pj_name;
//                        $report['area'] = $value->area;
//                        $report['ws_name'] = $value->ws_name;
////                    $report->save();
//                        echo 'All data saved';
//                    }
//                else{
//                        echo 'This subtask id exists!!!';
//                    }
                }
            }
        }
        dd($new);

    }

    //передача данных
    public function sendReport(){

        $data = Report::all();
//        dd($data);
//        Route::get('/', function () {
        dd("Sfg");
//            return view('report.index', compact('data'));
            return view('index', compact('data'));
//        });
//     return Route::view('/report', 'report', [$data]);
//        return Redirect::route('report.show, $id')->with( ['data' => $data] );

    }

}
