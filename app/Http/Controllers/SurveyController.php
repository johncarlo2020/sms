<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyModel;
use App\Models\Questiontype;
use App\Models\Questions;
use App\Models\AnswerModel;

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
        $questions = Questions::where('survey_id', $survey->id)->get();

        return redirect()->route('survey_new', [$survey->id]);
        //dd($su);
        //return view('survey', compact('survey', 'question_types'));
    }

    public function show($id)
    {
        $survey = SurveyModel::where('id', $id)->get();
        $question_types = Questiontype::get();
        $question_list = Questions::where('survey_id', $id)->get();
        $question;
        $questions=[];
        
        
        foreach ($question_list as $key => $value) {
            $question['name']=$value->name;
            $question['description']=$value->description;
            $question['required']=$value->required;
            $question['survey_id']=$value->survey_id;
            $question['type']=$value->question_type_id;
            $question['answer']=[];
             $q_id=$value->id;
            $answer=AnswerModel::where('questions_id',$q_id)->get();
            array_push($question['answer'],$answer);

            array_push($questions,$question);
        }

        // dd($questions);

        return view('survey', compact('survey', 'question_types','questions'));
    }
}
