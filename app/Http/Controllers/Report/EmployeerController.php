<?php

namespace App\Http\Controllers\Report;
use App\Models\Employeer;

class EmployeerController
{

    public static function saveEmployeers($newsData){
        foreach ($newsData as $value){
            dd($value);
//            $employee = new Employeer();
//
//                $employee['id']    = $value->user_id;
//                $employee['first_name'] = $value->username;
//    //            $employee['last_name']  = $value->last_name;
//    //            $employee['identifier'] = $value->
//    //            $employee['position']   = $value->
//                $employee['department'] = $value->area;
//    //            $employee['salary_rate']= $value->
//
//            ];
//            $employee->save();

        }
//       dd($employee);



    }

}
