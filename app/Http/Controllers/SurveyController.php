<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyModel;

class SurveyController extends Controller
{
    //
    public function index(Request $request, $id)
    {
        dd($Request);
        return view('survey');
    }

    public function create(Request $request)
    {
        // dd($request->survey);
        $inputs = ['name' => $request->survey];
        $survey = SurveyModel::create($inputs);

        return view('survey', compact('survey'));
    }
}
