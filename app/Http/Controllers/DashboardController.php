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
        $data['packet'] = Packet::all();
        $contentTypes = $this->getContentType();
        $packet = new Packet();
        foreach ($contentTypes as $contentType){
            $results[] = [
                'content-type' => $contentType,
                'count' => $packet->contentTypeCount($contentType),
                'color' => $this->randomColor(),
            ];
        }
        $data['results'] = $results;
        return view('dashboard.index',$data);
    }

    public function getContentType(){
        $packets = Packet::all();
        $contentTypes = [];
        foreach ($packets as $packet){
            $match = preg_match('/Content-Type: ([a-z\/]*)[;| ]?/',$packet->responseHeader,$result);
            if($match)
                $contentTypes[] = $result[1];
        }
        return array_unique($contentTypes);
    }

    public function randomColor(){
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        return '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    }

    public function showPacket(Request $request){
        $data['packets'] = Packet::paginate(10);
        $data['contentTypes'] = $this->getContentType();
        if(isset($request->page)){
            $returnHTML =  view('dashboard.table',$data)->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
        return view('dashboard.packet',$data);
    }

    public function filterPacket(Request $request){
        $packet = Packet::where('responseHeader','LIKE','%'.$request->content_type.'%');
        /*if ($request->time != '')
            $packet = $packet->where('time', $request->time);*/
        $packet = $packet->paginate(10);
        $data['filter'] = [
            'content_type' => $request->content_type,
            'time' => $request->time,
        ];
        $packet->setPath('filter');
        $data['packets'] = $packet;
        $returnHTML =  view('dashboard.table',$data)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function showXml($id){
        $packet = Packet::find($id);
        preg_match('/Content-Type: ([a-z\/]*)[;| ]?/',$packet->responseHeader,$type);
        return response($packet->response)
            ->header('Content-Type',$type[1]);
    }
}
