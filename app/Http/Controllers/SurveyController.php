<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyModel;
use App\Models\Questiontype;

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
        $question_types = Questiontype::get();
        return view('survey', compact('survey', 'question_types'));
    }
}
