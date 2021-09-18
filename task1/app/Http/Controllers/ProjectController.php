<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('index');
    }

    public function addproject(){
        return view('add_project');
    }

    public function myplan(){
        return view('my_plan');
    }
    public function report(){
        return view('report');
    }
    public function testerreport(){
        return view('tester_report');
    }
    
}
