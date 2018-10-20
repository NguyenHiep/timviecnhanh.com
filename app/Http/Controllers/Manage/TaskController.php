<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

class TaskController extends BaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function index_status()
    {
        return view('manage.tasks.index_status');
    }

    public function index_tags()
    {
        return view('manage.tasks.index_tags');
    }

    public function index_calendar()
    {
        return view('manage.tasks.index_calendar');
    }
}
