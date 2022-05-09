<?php

namespace App\Http\Controllers;
use App\Models\T_A_Chief;
use App\Models\T_A_Director;
use App\Models\T_A_Nonpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class T_A_Controller extends Controller
{
    public function getlist()     
	{
        $data = T_A_Chief::all();
        return view('select.salary-1',['data'=>$data]);
    }
}
