<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Services;


use Carbon\Carbon;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Support\Facades\Cache;

class HomeService
{
    /**
     * Get profile basic info and cache info
     */
    public function getGithubCommitsAndRepositoriesCount(){
        if(!Cache::has('public_repos')){
            $public_repos = GitHub::me()->show()['public_repos'];

            Cache::put('public_repos', $public_repos, 30);
        }

        if(!Cache::has('commits')){
            $commits = GitHub::repo()->statistics('mauri870','site')['0']['total'];
            Cache::put('commits', $commits, 30);
        }
    }

    /**
     * @return int
     */
    public function getMyAge()
    {
        return Carbon::now()->diffInYears(Carbon::parse('1995-10-19 05:30:00'));
    }

    /**
     * @return int
     */
    public function getTotalDevTime()
    {
        return Carbon::now()->diffInYears(Carbon::parse('2013-9-2 19:00:00'));
    }
}