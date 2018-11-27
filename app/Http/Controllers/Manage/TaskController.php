<?php

namespace App\Http\Controllers\Manage;

use App\Model\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\TaskExport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function export()
    {
        return Excel::download(new TaskExport, 'task.csv', \Maatwebsite\Excel\Excel::TSV);
    }
}
