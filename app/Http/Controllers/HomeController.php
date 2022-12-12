<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyModel;
use App\Models\Questiontype;
use App\Models\Questions;
use App\Models\AnswerModel;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
}
