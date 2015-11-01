<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $my_age = Carbon::now()->diffInYears(Carbon::parse('1995-10-19 17:30:00'));
        return view('index',compact('my_age'));
    }
}