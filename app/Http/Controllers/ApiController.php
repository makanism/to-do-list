<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller{
    public function getTasks()
    {
        $tasks = DB::select("SELECT * FROM to_do");
        return response()-> json($tasks);
    }
}