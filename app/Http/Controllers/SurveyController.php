<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyModel;
use App\Models\Questiontype;
use App\Models\Questions;
use App\Models\AnswerModel;
use App\Models\Section;
use App\Models\part;


class SurveyController extends Controller
{
    //
    public function index()
    {
       $surveys = SurveyModel::get();
         $survey_list=[];

         foreach ($surveys as $key => $value) {
             $survey['name']=$value->name;
             $question = Questions::where('survey_id', $value->id)->count();
             $survey['count']=$question;
             $survey['id']=$value->id;
             array_push($survey_list,$survey);
         }
        return view('home', compact('survey_list'));
    }

    public function preview($id){

        
        // $question;
        $sections=[];
        $survey = SurveyModel::where('id', $id)->get();
        $question_types = Questiontype::get();

        $section= Section::where('survey_id',$id)->get();
        foreach($section as $key=> $value){
            $sections[$key]['name']=$value['name'];
            $part=part::where('section_id',$value['id'])->get();
            foreach($part as $key1=> $value1){
            $sections[$key]['part'][$key1]['name']=$value1['name'];
            $question_list = Questions::where('parts_id', $value1['id'])->get();
                foreach($question_list as $key2=>$value2){
                 $sections[$key]['part'][$key1]['questions'][$key2]['questions_name']=$value2['name'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['questions_description']=$value2['description'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['required']=$value2['required'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['type']=$value2['question_type_id'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['survey_id']=$value2['survey_id'];


                 $answer=AnswerModel::where('questions_id',$value2['id'])->get();
                 foreach($answer as $key3=>$value3){
                 $sections[$key]['part'][$key1]['questions'][$key2]['answers'][$key3]=$value3['name'];

                 }
                }
            }
        }

        // dd($questions);

        return view('preview', compact('survey', 'question_types','sections'));
        
    }

    public function create(Request $request)
    {
        // dd($request->survey);
        $inputs = ['name' => $request->survey];
        $survey = SurveyModel::create($inputs);
        $question_types = Questiontype::get();
        // $questions = Questions::where('survey_id', $survey->id)->get();

        return redirect()->route('survey_new', [$survey->id]);
        //dd($su);
        return view('survey', compact('survey', 'question_types'));
    }

    public function show($id)
    {
        // $question;
        $sections=[];
        $survey = SurveyModel::where('id', $id)->get();
        $question_types = Questiontype::get();

        $section= Section::where('survey_id',$id)->get();
        foreach($section as $key=> $value){
            $sections[$key]['name']=$value['name'];
            $part=part::where('section_id',$value['id'])->get();
            foreach($part as $key1=> $value1){
            $sections[$key]['part'][$key1]['name']=$value1['name'];
            $question_list = Questions::where('parts_id', $value1['id'])->get();
                foreach($question_list as $key2=>$value2){
                 $sections[$key]['part'][$key1]['questions'][$key2]['questions_name']=$value2['name'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['questions_description']=$value2['description'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['required']=$value2['required'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['type']=$value2['question_type_id'];
                 $sections[$key]['part'][$key1]['questions'][$key2]['survey_id']=$value2['survey_id'];


                 $answer=AnswerModel::where('questions_id',$value2['id'])->get();
                 foreach($answer as $key3=>$value3){
                 $sections[$key]['part'][$key1]['questions'][$key2]['answers'][$key3]=$value3['name'];

                 }
                }
            }
        }

        return view('survey', compact('survey','question_types','sections'));
    }
}
