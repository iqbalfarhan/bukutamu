<?php

namespace App\Http\Controllers;

use App\Tamu;
use Auth;

class HomeController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datas = [
            'today' => Tamu::whereDate('created_at', date('Y-m-d')),
            'thisMonth' => Tamu::whereMonth('created_at', date('m'))
        ];
        return view('dashboard', $datas);
    }
}
