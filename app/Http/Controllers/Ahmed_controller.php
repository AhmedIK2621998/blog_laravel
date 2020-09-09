<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ahmed_controller extends Controller
{
    public function Action(){
        return view('test', 
            [
                'name'=>'Ibrahim',
                'Age'=> 23, 
                'Book'=>['Arabic','English','Math']
            ]);
    }

    public function Action2(){
        return '<h1 style="color:green;">That is 2 Action Method<h1>';
    }
}
