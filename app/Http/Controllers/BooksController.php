<?php

namespace App\Http\Controllers;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){

        return  response()->json(
            
                ['title'=>'Branston'],[
                    ['title'=>'Branston']
                ]
        
        );;
    }

    //
}
