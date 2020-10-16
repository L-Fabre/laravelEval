<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;

class ActionController extends Controller
{
    //add a statue
    public function add(Request $request)
    {
        Statue::addOne($request);
        return redirect('statues');
       
    }

    //delete a statue
    public function delete(Request $request)
    {   
        Statue::deleteOne($request);
        return redirect('statues');
       
    }

    //modify a single statue
    public function editOne(Request $request)
    {   
        Statue::editOne($request);
        return redirect('statues');
       
    }
}
