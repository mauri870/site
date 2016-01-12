<?php

namespace App\Http\Controllers;


use App\Services\HomeService;
use Carbon\Carbon;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    /**
     * @var HomeService
     */
    private $service;

    public function __construct(HomeService $service)
    {

        $this->service = $service;
    }

    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $my_age = Carbon::now()->diffInYears(Carbon::parse('1995-10-19 05:30:00'));
        $dev_time = Carbon::now()->diffInYears(Carbon::parse('2013-9-2 19:00:00'));

        $this->service->getGithubCommitsAndRepositoriesCount();

        $public_repos = Cache::get('public_repos');
        $commits = Cache::get('commits');

        return view('index',compact('my_age','dev_time','public_repos','commits'));
    }


    /**
     * Send an mail for form contact
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function contact(Request $request)
    {
        $rules = [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ];
        $attributes = [
            'name'=>strtolower(trans('home.contact_name')),
            'email'=>'email',
            'subject'=>strtolower(trans('home.contact_subject')),
            'message'=>strtolower(trans('home.contact_message'))
        ];
        $validator = Validator::make($request->all(),$rules);
        $validator->setAttributeNames($attributes);
        if($validator->fails()){
            return redirect()
                ->to(route('home.index').'#contact')
                ->withErrors($validator->errors())
                ->withInput();
        }

        Mail::send('emails.templates.contact',
            [
                'site_domain' => env('SITE_DOMAIN',null),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'email_message' => $request->get('message')
            ], function($mail){
                $mail->from(env('MAIL_USERNAME', null));
                $mail->to(env('MAIL_USERNAME', null), 'Site Admin')->subject('Contato do site '.env('SITE_DOMAIN',null));
            });
        //Log Users action
        \Log::info('Usuário com ip '.$request->getClientIp(). ' enviou um email pelo site');

        Flash::success(trans('home.contact_success_message'));
        return redirect()->to(route('home.index').'#contact');
    }
}