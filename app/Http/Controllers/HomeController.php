<?php

//
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use Response;
use Auth;

class HomeController extends Controller
{
    // add comments
    public function index()
    {
        // 用户 users
        return view('home/index');
    }

    // add comments
    public function black()
    {
        // 用户 users
        return view('home/black');
    }

    // add comments
    public function activity()
    {
        // 用户 users
        return view('home/activity');
    }

    // add comments
    public function find()
    {
        // 用户 users
        return view('home/find');
    }
}
