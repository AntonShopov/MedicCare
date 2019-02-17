<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Decease;

class DeceaseController extends Controller
{
    public function store(Request $request,$id){
        $decease = new Decease;
        $decease->name = $request->name;
        $decease->time = $request->time;
        $decease->description = $request->description;
        $user = new User;
        $user = User::find($id);
        $user->deceases()->save($decease);
        $decease->save();
        return view('home');
    }
}
