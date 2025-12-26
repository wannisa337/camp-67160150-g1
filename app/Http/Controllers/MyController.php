<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    //Construction
    //MyController()
    function __construct(){

    }
    function index() {
        return view('html101');

    }
    function info(Request $req){
        return view('myview.info');
    }
    function calculate(Request $req){
        echo $req->input('mynumber');
        $data ['num'] = $req ->input('mynumber');
        return view ('myview.calculate',$data);
    }
    function store(Request $request){
        $data = [
            'fname'   => $request->fname,
            'lname'   => $request->lname,
            'birthday'=> $request->birthday,
            'age'     => $request->age,
            'gender'  => $request->gender,
            'address' => $request->address,
            'color'   => $request->color,
            'music'   => $request->music,
            'agree'   => $request->agree ? 'ยินยอม' : 'ไม่ยินยอม' ,
        ];
        return view('myview.htmlview',$data);
    }

}
