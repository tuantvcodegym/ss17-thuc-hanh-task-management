<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(){
        $tasks = \App\Tasks::all();
        return view('index', compact('tasks'));
    }
}
