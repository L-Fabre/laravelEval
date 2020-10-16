<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;

class NavController extends Controller
{
    public function welcome(){

        return view('welcome');
    }

    public function add(){

        return view('add');
    }

    public function statues(){

        $statues = Statue::getAll();
        return view('statues', ['statues' => $statues]);
    }

    public function edit(Request $request){
        $statue = Statue::getOne($request);
        return view('edit', ['statue'=>$statue]);
    }
}
