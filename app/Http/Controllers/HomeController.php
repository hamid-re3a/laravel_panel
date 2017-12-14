<?php

namespace App\Http\Controllers;

use App\Packet;
use App\Sqlite_sequence;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function filter(Request $request){
        $packet = Packet::where('responseHeader','LIKE','%'.$request->content_type.'%')->paginate(10);
        $packet->setPath('filter');
        $data['packets'] = $packet;
        $data['filter'] = $request->content_type;
        $returnHTML =  view('packet.table',$data)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function showXml($id){
        $packet = Packet::find($id);
        preg_match('/Content-Type: ([a-z\/]*)[;| ]?/',$packet->responseHeader,$type);
        return response($packet->response)
            ->header('Content-Type',$type[1]);
    }

    public function chart(){
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
        return view('packet.chart',$data);
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
}
