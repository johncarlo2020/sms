<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\AnswerModel;


class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_question(Request $request)
    {
        $data['form'] = $request->form;
        $data['answer'] = $request->answers;
        $data['sub_q']=$request->sub_questions;

        if(empty($data['form']['required'])){
            $required=0;
        }else{
            $required=1;
        }

        if(empty($data['sub_q'])){
            $subq="";
        }else{
            $subq=serialize($data['sub_q']);
        }

        $inputs = [
            'name' => $data['form']['question'],
            'description' => $data['form']['description'],
            'required' => $required,
            'survey_id' => $data['form']['survey_id'],
            'question_type_id' => $data['form']['question_type'],
            'parts_id'=> $data['form']['part'],
            'sub_questions'=>$subq
        ];
        $question['question'] = Questions::create($inputs);

        $question['answer']=[];

        if(!empty($data['answer'])){
            foreach ($data['answer'] as $key => $value) {
                if(!empty($value)){
                    $ans= [
                    'name' => $value,
                    'questions_id' => $question['question']->id
                ];
                $answer= AnswerModel::create($ans);
                array_push($question['answer'],$answer);
                }
            }
        }

       
        return($question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
