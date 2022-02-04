<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

use App\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;




class SitesController extends Controller
{
    //
     public function __construct()

    {
        $this->middleware('auth')->except(['create','store','createsecondpage','docs']);

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $sites = Site::latest()->firstOrFail();

        // return view ('sites.index');

       // $logs = DB::table('logs')->get();

       //  return view('sites.index', compact('logs'));


        // $logs = Log::all()->toArray();

        // return view ('sites.index',compact('logs'));


    }

 public function createsecondpage($name = null)
    {
        //
        return view('sites.secondpage',compact('name'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name = null)
    {
        //
        return view('sites.create',compact('name'));
    }


 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         request()->validate([

            'email' => 'required',
            'password' => 'required'


        ]);


        $site = new Site();

        $site ->email = request('email');
        $site ->password = request('password');

        $site ->save();

        return redirect('/site/textcode');

    }



      public function show($id)
    {
        // 
        $site = Site::findOrFail($id);

        return view ('sites.show', ['site' =>$site]);

    }



}

        
