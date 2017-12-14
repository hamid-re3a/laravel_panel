<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    public function contentTypeCount($contentType){
        return $this->where('responseHeader','LIKE','%'.$contentType.'%')->count();
    }
}
