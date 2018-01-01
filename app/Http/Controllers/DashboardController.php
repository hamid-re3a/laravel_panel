<?php

namespace App\Http\Controllers;

use App\Packet;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['get_result'] = [];
        // Get request to fetch json response
        $get_result = @file_get_contents('http://localhost/laravel/public/json');
        // Make json object from result
        $json_result = json_decode($get_result,true);

        $data['get_result'] = $json_result;

        $total = 0;
        foreach ($data['get_result'] as $res){
            $total += (int)$res;
        }
        $data['count'] = $total ;
        return view('dashboard.index',$data);
        
    }

    public function users(){
        $data['get_result'] = [];
        // Get request to fetch json response
        $get_result = @file_get_contents('http://localhost/laravel/public/people');
        // Make json object from result
        $people_result = json_decode($get_result,true);

        return view('dashboard.people',compact('people_result'));

    }

}
