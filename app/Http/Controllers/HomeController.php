<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $my_age = Carbon::now()->diffInYears(Carbon::parse('1995-10-19 17:30:00'));
        $dev_time = Carbon::now()->diffInYears(Carbon::parse('2013-9-2 19:00:00'));

        if(!Cache::has('public_repos')){
            $public_repos = GitHub::me()->show()['public_repos'];
            $commits = GitHub::repo()->statistics('mauri870','site')[0]['total'];

            Cache::put('public_repos', $public_repos, 30);
            Cache::put('commits', $commits, 30);
        }
        
        $public_repos = Cache::get('public_repos');
        $commits = Cache::get('commits');

        return view('index',compact('my_age','dev_time','public_repos','commits'));
    }
}