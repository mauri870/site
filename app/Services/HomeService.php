<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Services;


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
            $commits = GitHub::repo()->statistics('mauri870','site');
            $commits_total = array_shift($commits)['total'];

            Cache::put('commits', $commits_total, 30);
        }
    }
}