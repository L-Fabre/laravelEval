<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statue extends Model
{
    use HasFactory;

    public static function addOne($request) {

        // object creation
        $statue = new Statue;

        $statue->name = $request->name;
        $statue->creation_date = $request->creation_date;
        $statue->origin = $request->origin;
        $statue->price = $request->price;
        $statue->artist_name = $request->artist_name;
        
        $statue->save();

        return;
    }

    //collect all the statues
    public static function getAll() {
        $statues = Statue::All();
        return $statues;
    }

    //delete a statue
    public static function deleteOne($request){
        Statue::destroy($request->id);
        return; 
    }

    //collect a single statue
    public static function getOne($request){
        return Statue::find($request->id);
    }

    //modify a single statue
    public static function editOne($request){
        
        $statue = Statue::find($request->id);

        $statue->name = $request->name;
        $statue->creation_date = $request->creation_date;
        $statue->origin = $request->origin;
        $statue->price = $request->price;
        $statue->artist_name = $request->artist_name;
        $statue->save();

        return;
    }
}
