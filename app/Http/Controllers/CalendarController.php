<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar.index');
    }

    public function business()
    {
        return view('calendar.business');
    }
    public function meeting()
    {
        return view('calendar.meeting');
    }

    public function birthday()
    {
        return view('calendar.birthday');
    }
    public function project()
    {
        return view('calendar.project');
    }
}
